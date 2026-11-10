<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro exitoso en SIAgroBD</title>
</head>
<body style="margin: 0; padding: 0; background-color: #f4f6f8; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed; background-color: #f4f6f8; padding: 30px 15px;">
        <tr>
            <td align="center">
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px; background-color: #ffffff; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);">
                    <tr>
                        <td align="center" style="background: linear-gradient(135deg, #E6ECE1 0%, #2e7d32 100%); background-color: #2e7d32; padding: 25px 20px;">
                            <img src="{{ $message->embed(public_path('images/bannerSiagro.png')) }}"
                                 alt="SIAgroBD - CONABIO"
                                 style="max-width: 280px; width: 100%; height: auto; display: block; margin: 0 auto; border: 0;">
                        </td>
                    </tr>

                    <tr>
                        <td style="padding: 35px 30px;">
                            <h2 style="color: #212529; font-size: 20px; margin: 0 0 15px 0;">¡Hola, {{ $nombre }}!</h2>
                            <p style="color: #495057; font-size: 15px; line-height: 1.6; margin: 0 0 20px 0;">
                                Te has registrado exitosamente en el <strong>Sistema de Información de la Agrobiodiversidad (SIAgroBD)</strong>. A partir de ahora tienes acceso a nuestras bases de datos e interfaces de consulta avanzada.
                            </p>
                            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="margin: 25px 0;">
                                <tr>
                                    <td align="center">
                                        <a href="https://siagro.conabio.gob.mx/" target="_blank" style="background-color: #2e7d32; color: #ffffff; text-decoration: none; padding: 12px 28px; border-radius: 6px; font-weight: 600; font-size: 14px; display: inline-block;">
                                            Ingresar al Portal SIAgroBD
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td align="center" style="background-color: #f8f9fa; border-top: 1px solid #e9ecef; padding: 20px 25px;">
                            <p style="color: #868e96; font-size: 12px; margin: 0; line-height: 1.4;">
                                Este correo es enviado automáticamente por el sistema SIAgroBD.<br>
                                Por favor, no respondas a este mensaje.
                            </p>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>
</body>
</html>
