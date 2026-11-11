<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class RegistroInternoController extends Controller
{
    public function index()
    {
        $autorizado = Session::get('usuario_autorizado');
        return view('registro_interno', compact('autorizado'));
    }

    public function verificar(Request $request)
    {
        $request->validate([
            'form-usuario' => 'required',
            'form-contrasena' => 'required',
        ]);
        $usuario = $request->input('form-usuario');
        $contrasena = $request->input('form-contrasena');
        $admin = DB::table('usuario_autorizado')
            ->whereRaw("usuario = BINARY ?", [$usuario])
            ->whereRaw("contrasena = BINARY ?", [$contrasena])
            ->first();
        if ($admin) {
            Session::put('usuario_autorizado', [
                'usuario' => $admin->usuario,
                'nombre_completo' => ($admin->nombre ?? '') . ' ' . ($admin->apellido ?? '')
            ]);
            return redirect()->route('registro.interno');
        }
        return redirect()->route('registro.interno')->with('error_login', 'El usuario o contraseña son incorrectos.');
    }

    public function guardar(Request $request)
    {
        if (!Session::has('usuario_autorizado')) {
            return redirect()->route('registro.interno');
        }
        $request->validate([
            'nombre' => 'required|string',
            'apellidos' => 'required|string',
            'correo' => 'required|email',
            'usuario' => 'required|string',
            'contrasena' => 'required|min:6|confirmed',
            'institucion' => 'nullable|string',
            'pais' => 'required',
            'estado' => 'nullable',
            'uso' => 'required'
        ]);
        $quienRegistra = Session::get('usuario_autorizado')['nombre_completo'];
        $hoy = now();
        $fechaExpiracion = now()->addMonths(3);
        $clave = str_pad(substr($request->uso, 0, 16), 16, "_");
        $iv = str_pad(substr($request->correo, 0, 16), 16, "_");
        $contrasenaEncriptada = openssl_encrypt($request->contrasena, 'aes-256-cbc', $clave, 0, $iv);
        DB::table('registro_interno')->insert([
            'fecha' => $hoy,
            'usuario' => $request->usuario,
            'correo' => $request->correo,
            'apellido' => $request->apellidos,
            'nombre' => $request->nombre,
            'estado' => $request->estado ?? 'No especificado',
            'pais' => $request->pais,
            'institucion' => $request->institucion,
            'uso' => $request->uso,
            'contrasena' => $contrasenaEncriptada,
            'registrado_por' => $quienRegistra,
            'fecha_expiracion' => $fechaExpiracion
        ]);
        return redirect()->route('registro.interno')->with('exito', '¡Usuario registrado exitosamente en la base de Colectas GEF!');
    }

    public function salir()
    {
        Session::forget('usuario_autorizado');
        return redirect()->route('registro.interno');
    }
}
