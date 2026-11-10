<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactoSiagro;
use App\Mail\MensajeContactoMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactoController extends Controller
{
    public function index()
    {
        return view('forma_citar');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre'  => 'required|string|max:150',
            'correo'  => 'required|email|max:150',
            'mensaje' => 'required|string|max:1000',
        ], [
            'nombre.required'  => 'El nombre completo es obligatorio.',
            'correo.required'  => 'El correo electrónico es obligatorio.',
            'correo.email'     => 'Ingresa un formato de correo válido.',
            'mensaje.required' => 'El mensaje no puede ir vacío.',
            'mensaje.max'      => 'El mensaje no debe exceder 1000 caracteres.',
        ]);

        $nombre  = $request->input('nombre');
        $correo  = $request->input('correo');
        $mensaje = $request->input('mensaje');
        $fecha = now()->setTimezone('America/Mexico_City')->format('Y-m-d H:i:s');
        $ultimoId = ContactoSiagro::max('id') ?? 0;
        $nuevoId  = $ultimoId + 1;

        ContactoSiagro::create([
            'id'      => $nuevoId,
            'fecha'   => $fecha,
            'nombre'  => $nombre,
            'email'   => $correo,
            'mensaje' => $mensaje,
        ]);

        $destinatarios = [
            'lvazquez@conabio.gob.mx',
            'oswaldo.oliveros@conabio.gob.mx',
            'siagrobd@conabio.gob.mx',
            'aponce@conabio.gob.mx'
        ];

        try {
            Mail::to($destinatarios)->send(new MensajeContactoMail($nombre, $correo, $mensaje));
        } catch (\Exception $e) {
            Log::error("Error enviando correo de contacto: " . $e->getMessage());
        }

        return response()->json([
            'status'  => 200,
            'message' => '¡Mensaje enviado con éxito! Pronto nos pondremos en contacto contigo.'
        ], 200);
    }
}
