<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="x-apple-disable-message-reformatting">
    <title></title>
    <!--[if mso]>
    <noscript>
        <xml>
            <o:OfficeDocumentSettings>
                <o:PixelsPerInch>96</o:PixelsPerInch>
            </o:OfficeDocumentSettings>
        </xml>
    </noscript>
    <![endif]-->
    <style>
        table, td, div, h1, p {font-family: Arial, sans-serif;}

    </style>
</head>
<body style="margin:0;padding:0;">
<table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;background:#ffffff;">
    <tr>
        <td align="center" style="padding:0;">
            <table role="presentation" style="width:602px;border-collapse:collapse;border:1px solid #cccccc;border-spacing:0;text-align:left;">
                <tr>
                    <td align="center" style="padding:40px 0 30px 0;background:white;">
                        <img src="http://resultados-dime.test/img/alogo.png" alt="">
                    </td>
                </tr>
                <tr>
                    <td style="padding:36px 30px 42px 30px;">
                        <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">
                            <tr>
                                <br style="padding:0 0 36px 0;color:#153643;">
                                    <table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0"><tbody>

                                        <tr>
                                            <td style="text-align:center;padding:10px;color:#ffffff;font-size:20px;font-family:arial,sans-serif;background-color:#008200">
                                                <p><strong>FORMULARIO DE CONFIDENCIALIDAD Y TRANSPARENCIA</strong></p>
                                            </td>
                                        </tr>

                                        </tbody></table>
                                    <p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">
                                    <hr>
                                    DIME CLINICA NEUROCARDIOVASCULAR te envia el formulario de linea de  transparencia:

                                <br> <h5 style="color: #008200">DATOS BASICOS DEL REPORTE</h5></br>
                                    <h5 style="color: #008200">Tipo de denuncia: {{$formulario->tipo_de_denuncia}}</h5>
                                    <h5 style="color: #008200">Situación: {{$formulario->situacion}}</h5>
                                    <h5 style="color: #008200">Fecha del evento: {{$formulario->fecha}}</h5>

                                <br> <h5 style="color: #008200">PERSONAS RELACIONADAS EN EL REPORTE</h5></br>

                                    <h5 style="color: #008200">Nombre: {{$formulario->nombre_relacionada_reporte}}</h5>
                                    <h5 style="color: #008200">Cargo: {{$formulario->cargo}}</h5>
                                    <h5 style="color: #008200">Detalles adicionales: {{$formulario->detalles_ad}}</h5>

                                <br><h5 style="color: #008200">DATOS DE PERSONA QUE REPORTA</h5></br>

                                    <h5 style="color: #008200">Tipo de vinculacion: {{$formulario->t_vinculacion}}</h5>
                                    <h5 style="color: #008200">Nombre: {{$formulario->nombre}}</h5>
                                    <h5 style="color: #008200">Email: {{$formulario->email}}</h5>
                                    <h5 style="color: #008200">Telefono o celular: {{$formulario->numero}}</h5>



                                    <hr>

                                </td>
                            </tr>
                            <tr>
                                <td style="padding:0;">
                                    <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">
                                        <tr>
                                            <td style="width:260px;padding:0;vertical-align:top;color:#153643;">
                                                <p style="margin:0 0 25px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;"><img src="https://assets.codepen.io/210284/left.gif" alt="" width="260" style="height:auto;display:block;" /></p>
                                                <p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">
                                                <p style="margin:0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;"></p>
                                            </td>
                                            <td style="width:20px;padding:0;font-size:0;line-height:0;">&nbsp;</td>
                                            <td style="width:260px;padding:0;vertical-align:top;color:#153643;">
                                                <p style="margin:0 0 25px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;"><img src="https://assets.codepen.io/210284/right.gif" alt="" width="260" style="height:auto;display:block;" /></p>
                                                <p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;"></p>
                                                <p style="margin:0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;"></p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="padding:30px;background:#6fac82;">
                        <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;font-size:9px;font-family:Arial,sans-serif;">
                            <tr>
                                <td style="padding:0;width:50%;" align="left">
                                    <p style="margin:0;font-size:14px;line-height:16px;font-family:Arial,sans-serif;color:#ffffff;">
                                        &reg; DIME Clinica {{date('Y')}}<br/>
                                    </p>
                                </td>
                                <td style="padding:0;width:50%;" align="right">

                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>
