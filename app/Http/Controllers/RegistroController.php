<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Registro;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegistroExitosoMail;

class RegistroController extends Controller
{
    private function encriptar($valor, $method, $clave, $otro, $iv)
    {
        return openssl_encrypt($valor, $method, $clave, false, $iv);
    }

    public function store(Request $request)
    {
        $request->validate([
            'form-nombre'       => 'required|string|max:100',
            'form-apellido'     => 'required|string|max:100',
            'form-email'        => 'required|email|max:150|unique:registro,correo',
            'form-usuario'      => 'required|string|max:50|unique:registro,usuario',
            'form-contrasena'   => 'required|min:8',
            'form-confirmacion' => 'required|same:form-contrasena',
            'form-pais'         => 'required',
            'form-estado'       => 'nullable|string',
            'form-institucion'  => 'nullable|string',
            'uso'               => 'required|array',
        ],[
            'form-email.unique'        => 'El correo electrónico ya está registrado. Por favor, utiliza otro.',
            'form-email.required'      => 'El correo electrónico es obligatorio.',
            'form-email.email'         => 'Ingresa un formato de correo válido.',
            'form-usuario.unique'      => 'El nombre de usuario ya está en uso. Por favor, elige otro.',
            'form-usuario.required'    => 'El nombre de usuario es obligatorio.',
            'form-nombre.required'     => 'El nombre es obligatorio.',
            'form-apellido.required'   => 'Los apellidos son obligatorios.',
            'form-contrasena.required' => 'La contraseña es obligatoria.',
            'form-contrasena.min'      => 'La contraseña debe tener al menos 8 caracteres.',
            'form-confirmacion.same'   => 'Las contraseñas no coinciden.',
            'form-pais.required'       => 'El país es obligatorio.',
            'uso.required'             => 'Debes elegir al menos una razón de consulta.',
        ]);
        $nombre       = $request->input('form-nombre');
        $apellidos    = $request->input('form-apellido');
        $correo       = $request->input('form-email');
        $usuario      = $request->input('form-usuario');
        $contrasena   = $request->input('form-contrasena');
        $institucion  = $request->input('form-institucion');
        $estado       = $request->input('form-estado');
        $pais         = $request->input('form-pais');
        $uso = implode(', ', $request->input('uso', []));
        $method = 'aes-256-cbc';
        $clave = $uso;
        if (strlen($clave) > 16) {
            $clave = substr($clave, 0, 16);
        }
        if (strlen($clave) < 16) {
            $clave = str_pad($clave, 16, "_");
        }
        $iv = $correo;
        if (strlen($iv) > 16) {
            $iv = substr($iv, 0, 16);
        }
        if (strlen($iv) < 16) {
            $iv = str_pad($iv, 16, "_");
        }
        $contrasenaFinal = $this->encriptar($contrasena, $method, $clave, false, $iv);
        Registro::create([
            'nombre'      => $nombre,
            'apellido'    => $apellidos,
            'correo'      => $correo,
            'usuario'     => $usuario,
            'contrasena'  => $contrasenaFinal,
            'pais'        => $pais,
            'estado'      => $estado,
            'institucion' => $institucion,
            'uso'         => $uso,
        ]);
         try {
            Mail::to($correo)->send(new RegistroExitosoMail($nombre));
        } catch (\Exception $e) {
            \Log::error("Error al enviar correo de registro: " . $e->getMessage());
        }
        return response()->json([
            'status'  => 'success',
            'message' => '¡Te registraste exitosamente en el SIAgroBD! Te hemos enviado un correo de confirmación.'
        ], 201);
    }
}
