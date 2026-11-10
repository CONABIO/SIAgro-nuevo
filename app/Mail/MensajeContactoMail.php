<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Queue\SerializesModels;

class MensajeContactoMail extends Mailable
{
    use Queueable, SerializesModels;

    public $nombre;
    public $correo;
    public $mensajeTexto;

    public function __construct($nombre, $correo, $mensajeTexto)
    {
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->mensajeTexto = $mensajeTexto;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Mensaje desde SiAgroBD - Contacto',
            replyTo: [
                new Address($this->correo, $this->nombre)
            ],
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.mensaje_contacto',
        );
    }
}
