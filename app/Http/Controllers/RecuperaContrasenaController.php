<?php

namespace App\Http\Controllers;

use App\Models\Registro;
use App\Services\KeycloakSyncService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class RecuperaContrasenaController extends Controller
{
    public function index(Request $request)
    {
        $instancias = [
            'canastas'     => ['nombre' => 'Canastas regionales del bien comer', 'url' => 'https://canastas-siagro.conabio.gob.mx/'],
            'colectas_gef' => ['nombre' => 'Colectas GEF', 'url' => 'https://colectas_gef-siagro.conabio.gob.mx/'],
            'especies'     => ['nombre' => 'Especies de la agrobiodiversidad', 'url' => 'https://especies-siagro.conabio.gob.mx/'],
            'focales'      => ['nombre' => 'Grupos de enfoque', 'url' => 'https://focales-siagro.conabio.gob.mx/'],
            'maices'       => ['nombre' => 'Proyecto Global de Maíces Nativos', 'url' => 'https://maices-siagro.conabio.gob.mx/'],
            'nutricion'    => ['nombre' => 'Tablas de composición de alimentos extendida del INCMNSZ', 'url' => 'https://nutricion-siagro.conabio.gob.mx/'],
        ];
        $origen = null;
        $param = strtolower((string) $request->query('instancia', ''));
        if (isset($instancias[$param])) {
            $origen = $instancias[$param];
        }
        if (!$origen && ($referer = $request->headers->get('referer'))) {
            $host = strtolower((string) parse_url($referer, PHP_URL_HOST));
            foreach ($instancias as $slug => $info) {
                if (str_starts_with($host, $slug . '-siagro.')) {
                    $origen = $info;
                    break;
                }
            }
        }
        return view('recupera_contrasena', [
            'instancias' => $instancias,
            'origen'     => $origen,
        ]);
    }

    public function update(Request $request, KeycloakSyncService $keycloak)
    {
        $request->validate([
            'form-email'        => 'required|email|max:150',
            'form-usuario'      => 'required|string|max:50',
            'form-contrasena'   => 'required|min:8',
            'form-confirmacion' => 'required|same:form-contrasena',
        ], [
            'form-email.required'        => 'El correo electrónico es obligatorio.',
            'form-email.email'           => 'Ingresa un formato de correo válido.',
            'form-usuario.required'      => 'El nombre de usuario es obligatorio.',
            'form-contrasena.required'   => 'La nueva contraseña es obligatoria.',
            'form-contrasena.min'        => 'La contraseña debe tener al menos 8 caracteres.',
            'form-confirmacion.required' => 'Debes confirmar la nueva contraseña.',
            'form-confirmacion.same'     => 'Las contraseñas no coinciden.',
        ]);
        $correo     = trim($request->input('form-email'));
        $usuario    = trim($request->input('form-usuario'));
        $contrasena = $request->input('form-contrasena');
        try {
            $userIds = $keycloak->findUserIdsInAllInstances($usuario, $correo);
            if (!$userIds) {
                return response()->json([
                    'status'  => 'error',
                    'message' => 'El usuario o correo no existen o no coinciden.',
                ], 409);
            }
            $status = $keycloak->resetPasswordInAllInstances($userIds, $contrasena);
            if ($status !== 204) {
                return response()->json([
                    'status'  => 'error',
                    'message' => 'No se pudo actualizar la contraseña en todas las bases de datos.',
                ], $status === 409 ? 409 : 500);
            }
        } catch (\Exception $e) {
            Log::error('Error en recupera_contrasena (Keycloak): ' . $e->getMessage());
            return response()->json([
                'status'  => 'error',
                'message' => 'Error de conexión con los servicios de autenticación.',
            ], 500);
        }
        $registro = Registro::where('usuario', $usuario)
            ->where('correo', $correo)
            ->first();
        if ($registro) {
            $uso   = $registro->uso ?? '';
            $clave = substr(str_pad($uso, 16, '_'), 0, 16);
            $iv    = substr(str_pad($correo, 16, '_'), 0, 16);
            $registro->contrasena = openssl_encrypt($contrasena, 'aes-256-cbc', $clave, false, $iv);
            $registro->save();
        }
        try {
            $mensaje = '<h3>¡Cambiaste tu contraseña exitosamente!</h3><br>'
                . 'Si no realizaste este cambio, por favor comunícate con nosotros a través de '
                . 'https://siagro.conabio.gob.mx/#forma_citar/ en la sección "¡Queremos escucharte!" lo más pronto posible.'
                . '<br><br><hr>Este correo es enviado automáticamente, favor de no responder.';
            Mail::html($mensaje, function ($mail) use ($correo) {
                $mail->to($correo)->subject('Cambio de contraseña de SIAgroBD');
            });
        } catch (\Exception $e) {
            Log::error('Error al enviar correo de cambio de contraseña: ' . $e->getMessage());
        }
        return response()->json([
            'status'  => 'success',
            'message' => '¡Cambiaste tu contraseña exitosamente en todas las bases de datos del SIAgroBD!',
        ], 200);
    }
}
