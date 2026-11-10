<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mensaje desde SiAgroBD</title>
</head>
<body style="margin: 0; padding: 25px; background-color: #f4f6f8; font-family: sans-serif;">
    <table width="100%" cellpadding="0" cellspacing="0" style="max-width: 600px; margin: 0 auto; background: #ffffff; border-radius: 12px; overflow: hidden; border: 1px solid #e5e7eb; box-shadow: 0 4px 12px rgba(0,0,0,0.06);">
        <tr>
            <td align="center" style="background: linear-gradient(135deg, #E6ECE1 0%, #2e7d32 100%); background-color: #12322b; padding: 28px 20px 22px 20px; text-align: center;">
                <img src="{{ $message->embed(public_path('images/LogoSIAgro.png')) }}"
                     alt="SIAgroBD - CONABIO"
                     style="max-width: 230px; width: 100%; height: auto; display: block; margin: 0 auto 10px auto; border: 0;">

                <h2 style="color: #ffffff; margin: 0; font-size: 17px; font-weight: 600; letter-spacing: 0.5px; opacity: 0.95;">
                    Formulario de Contacto
                </h2>
            </td>
        </tr>
        <tr>
            <td style="padding: 28px;">
                <p style="color: #374151; font-size: 15px; margin-top: 0; line-height: 1.5;">
                    Se recibió el siguiente mensaje a través de la pestaña <strong>"¡Queremos escucharte!"</strong> del portal SiAgroBD:
                </p>

                <div style="background: #f9fafb; border-left: 4px solid #77140A; padding: 14px 18px; margin: 20px 0; border-radius: 6px;">
                    <p style="margin: 0 0 6px 0; color: #111827; font-size: 14px;"><strong>Remitente:</strong> {{ $nombre }}</p>
                    <p style="margin: 0; color: #111827; font-size: 14px;"><strong>Correo:</strong> <a href="mailto:{{ $correo }}" style="color: #77140A; font-weight: 600; text-decoration: none;">{{ $correo }}</a></p>
                </div>

                <h4 style="color: #111827; margin: 20px 0 8px 0; font-size: 15px;">Mensaje:</h4>
                <div style="background: #ffffff; border: 1px solid #e5e7eb; border-radius: 8px; padding: 16px; color: #4b5563; font-size: 14px; line-height: 1.6; white-space: pre-wrap;">{{ $mensajeTexto }}</div>

                <p style="color: #6b7280; font-size: 13px; margin-top: 25px; line-height: 1.4;">
                    💡 <em>Favor de responder directamente a: <a href="mailto:{{ $correo }}" style="color: #12322b; font-weight: 600;">{{ $correo }}</a></em>
                </p>
            </td>
        </tr>
        <tr>
            <td align="center" style="background-color: #f8faf8; border-top: 1px solid #e9ecef; padding: 16px 20px;">
                <p style="color: #868e96; font-size: 12px; margin: 0; line-height: 1.4;">
                    CONABIO • Coordinación de Agrobiodiversidad y Recursos Biológicos<br>
                    Este mensaje fue enviado a través del portal SIAgroBD.
                </p>
            </td>
        </tr>
    </table>
</body>
</html>
