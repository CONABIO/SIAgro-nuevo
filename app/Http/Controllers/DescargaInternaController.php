<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\StreamedResponse;

class DescargaInternaController extends Controller
{
    public function index()
    {
        if (Session::has('usuario_descarga')) {
            return redirect()->route('colectas.descargas.panel');
        }
        return view('descarga_login');
    }

    public function verificar(Request $request)
    {
        $request->validate([
            'form-usuario' => 'required',
            'form-contrasena' => 'required',
        ]);
        $usuario = $request->input('form-usuario');
        $contrasena = $request->input('form-contrasena');
        $hoy = now();
        $user = DB::table('registro_interno')
            ->whereRaw("usuario = BINARY ?", [$usuario])
            ->first();

        if ($user) {
            $clave = str_pad(substr($user->uso, 0, 16), 16, "_");
            $iv = str_pad(substr($user->correo, 0, 16), 16, "_");
            $passDec = openssl_decrypt($user->contrasena, 'aes-256-cbc', $clave, 0, $iv);
            if ($passDec === $contrasena && $hoy <= $user->fecha_expiracion) {
                $nuevaExpiracion = now()->addMonths(3);
                DB::table('registro_interno')
                    ->where('usuario', $usuario)
                    ->update([
                        'fecha_expiracion' => $nuevaExpiracion,
                        'ultimo_ingreso' => $hoy
                    ]);
                Session::put('usuario_descarga', [
                    'usuario' => $user->usuario,
                    'nombre' => $user->nombre . ' ' . $user->apellido,
                    'correo' => $user->correo,
                    'expiracion' => $nuevaExpiracion->format('d/m/Y')
                ]);

                return redirect()->route('colectas.descargas.panel');
            }
        }

        return redirect()->route('colectas.descargas.login')
            ->with('error_login', 'Usuario o contraseña incorrectos, o tu cuenta ha expirado.');
    }

    public function panel()
    {
        if (!Session::has('usuario_descarga')) {
            return redirect()->route('colectas.descargas.login');
        }
        $usuario = Session::get('usuario_descarga');
        return view('descarga_panel', compact('usuario'));
    }

    public function exportar(Request $request)
    {
        if (!Session::has('usuario_descarga')) {
            return redirect()->route('colectas.descargas.login');
        }
        $estado = $request->input('estado', 'Todos');
        $proyecto = $request->input('proyecto', 'todos');
        $camposSeleccionados = $request->input('campos', []);
        try {
            DB::table('descarga')->insert([
                'nombre_bd' => 'colectas_gef_interna',
                'IP' => $request->ip(),
                'fecha' => now(),
                'pais' => 'México',
                'estado' => $estado,
                'ciudad' => ''
            ]);
        } catch (\Exception $e) {
        }

        $csvPath = public_path('tabla/colectas_gef_interna.csv');
        if (!file_exists($csvPath)) {
            return back()->with('error', 'El archivo base no se encuentra en el servidor. Copia colectas_gef_interna.csv a public/tabla/');
        }

        $nombreArchivo = ($estado == 'Todos' && $proyecto == 'todos')
            ? 'colectas_gef_interna.csv'
            : "{$estado}_{$proyecto}.csv";

        return response()->streamDownload(function () use ($csvPath, $estado, $proyecto, $camposSeleccionados) {
            $handle = fopen($csvPath, 'r');
            $output = fopen('php://output', 'w');

            if ($handle !== false) {
                $header = fgetcsv($handle);

                $indices = [];
                if (!empty($camposSeleccionados)) {
                    foreach ($header as $i => $col) {
                        if (in_array($col, $camposSeleccionados)) {
                            $indices[] = $i;
                        }
                    }
                } else {
                    $indices = array_keys($header);
                }
                $headerFiltrado = array_intersect_key($header, array_flip($indices));
                fputcsv($output, $headerFiltrado);
                $estadoIndex = array_search('Estado', $header);
                $proyIndex = array_search('proyecto_id', $header);
                while (($row = fgetcsv($handle)) !== false) {
                    $matchEstado = ($estado == 'Todos' || ($estadoIndex !== false && isset($row[$estadoIndex]) && $row[$estadoIndex] == $estado));
                    $matchProy = ($proyecto == 'todos' || ($proyIndex !== false && isset($row[$proyIndex]) && $row[$proyIndex] == $proyecto));
                    if ($matchEstado && $matchProy) {
                        $filaFiltrada = array_intersect_key($row, array_flip($indices));
                        fputcsv($output, $filaFiltrada);
                    }
                }
                fclose($handle);
            }
            fclose($output);
        }, $nombreArchivo, [
            'Content-Type' => 'text/csv; charset=UTF-8',
        ]);
    }

    public function salir()
    {
        Session::forget('usuario_descarga');
        return redirect()->route('colectas.descargas.login');
    }
}
