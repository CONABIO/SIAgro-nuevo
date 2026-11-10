<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class RegistroExitosoMail extends Mailable
{
    use Queueable, SerializesModels;

    public $nombre;

    /**
     * Recibe el nombre del usuario registrado
     */
    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * Asunto del correo
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: '¡Registro exitoso a SIAgroBD!',
        );
    }

    /**
     * Vista Blade que tiene el diseño del correo
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.registro_exitoso',
        );
    }
}
