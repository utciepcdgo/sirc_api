<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro Completado</title>
</head>
<body style="background-color:#f4f4f4; font-family:Arial, sans-serif; margin:0; padding:0" bgcolor="#f4f4f4">

<div class="container" style="background-color:#fff; border-radius:5px; box-shadow:0 0 5px #ccc; margin:0 auto; max-width:600px; padding:20px; width:100%" bgcolor="#ffffff" width="100%">
    <div class="header" style="background-color:#f8fafc; border-radius:5px 5px 0 0; color:#555; font-size:14; padding:10px 0; text-align:center" bgcolor="#f8fafc" align="center">
        <div class="tg-wrap"><table class="tg" style="border-collapse:collapse; border-spacing:0; margin:0 auto">
                <tbody>
                <tr>
                    <td class="tg-0lax" style="font-family:Arial, sans-serif; font-size:14px; overflow:hidden; padding:10px 5px; word-break:normal; text-align:left; vertical-align:top" align="left" valign="top"><img src="https://i.imgur.com/9TJfat5.png" alt="Logo" style="max-width: 100px; width: 100%; height: auto;"></td>
                    <td class="tg-0lax" style="font-family:Arial, sans-serif; font-size:14px; overflow:hidden; padding:10px 5px; word-break:normal; text-align:left; vertical-align:top" align="left" valign="top">
                        <b>Sistema de Registro de Candidaturas</b><br>Proceso Electoral Local 2024 — 2025<br>Notificaciones SIRC</td>
                    <td class="tg-0lax" style="font-family:Arial, sans-serif; font-size:14px; overflow:hidden; padding:10px 5px; word-break:normal; text-align:left; vertical-align:top" align="left" valign="top"><img src="https://s3.us-east-1.amazonaws.com/static.appsiepcdurango.mx/Miselaneo/01_Logo_PEL_2025.png" alt="Logo" style="max-width: 40px; width: 100%; height: auto;"></td>
                </tr>
                </tbody>
            </table></div>

    </div>


    <div class="content" style="padding:20px; text-align:left" align="left">
        <strong>Nuevos registros presentados.</strong>
        <p>Un Partido Político ha presentado registros formalmente, se adjunta Acuse generado con la información presentada.</p>
        <br>
        <table>
            <tbody>
            <tr>
                <td>Partido Político:</td>
                <td>{{$party}}</td>
            </tr>
            <tr>
                <td>Cantidad de registros:</td>
                <td>{{$count}}</td>
            </tr>
            <tr>
                <td>Hash del acuse:</td>
                <td>{{$hash}}</td>
            </tr>
            <tr>
                <td>Fecha y hora de operación:</td>
                <td>{{$date}}</td>
            </tr>
            </tbody>
        </table>
        <br>

        <a href="https://adminsirc.appsiepcdurango.mx" class="button" style="background-color:#111; border-radius:5px; box-shadow:0 3px 6px rgba(0, 0, 0, 0.5); color:#fff; display:inline-block; font-size:10pt; margin-top:20px; padding:10px 20px; text-decoration:none" bgcolor="#111111">Ir al Panel del revisión</a>
        <br>
        <br>
        <small style="color:#777777;text-align:center;">Este mensaje es una notificación, favor de no responder.</small>
    </div>

    <div class="footer" style="color:#777; font-size:12px; padding:10px; text-align:center" align="center">
        {{ date('Y') }} Sistema de Registro de Candidaturas (SIRC). Unidad Técnica de Cómputo.
    </div>
</div>

</body>
</html>
