<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
require_once "vendor/autoload.php";
//PHPMailer Object
$mail = new \PHPMailer\PHPMailer\PHPMailer();
$mail2 = new \PHPMailer\PHPMailer\PHPMailer();

$name = $_REQUEST['name'];
$lastname = $_REQUEST['lastname'];
$phone = $_REQUEST['phone'];
$email = $_REQUEST['email'];
$city = $_REQUEST['city'];


if($phone){
//Luego tenemos que iniciar la validación por SMTP:
    try {
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->Host = "smtp-relay.sendinblue.com"; // A RELLENAR. Aquí pondremos el SMTP a utilizar. Por ej. mail.midominio.com
        $mail->Username = "contacto@solucionsoft.com"; // A RELLENAR. Email de la cuenta de correo. ej.info@midominio.com La cuenta de correo debe ser creada previamente.
        $mail->Password = "w3R0vApxWrH7QKEN"; // A RELLENAR. Aqui pondremos la contraseña de la cuenta de correo
        $mail->Port = 587; // Puerto de conexión al servidor de envio.
        $mail->From = "no-reply@pracodidacol.com.co"; // A RELLENARDesde donde enviamos (Para mostrar). Puede ser el mismo que el email creado previamente.
        $mail->CharSet = 'UTF-8';
        $mail->FromName = "Mack Landing Anthem"; //A RELLENAR Nombre a mostrar del remitente.
        //$mail->AddAddress("contacto@solucionsoft.com"); // Esta es la dirección a donde enviamos
        $mail->AddAddress("mack_contacto@didacol.com"); // Esta es la dirección a donde enviamos
        $mail->AddAddress("habeasdata@didacol.com"); // Esta es la dirección a donde enviamos
        $mail->IsHTML(true); // El correo se envía como HTML
        $mail->Subject = "Lead MACK ANTHEM 2020"; // Este es el titulo del email.
        $body = "";
        $body .= "Nombres: ".$name."<br/>";
        $body .= "Apellidos: ".$lastname."<br/>";
        $body .= "Email: ".$email."<br/>";
        $body .= "Celular: ".$phone."<br/>";
        $body .= "Ciudad: ".$city."<br/>Lead Mack Anthem";


        $htmlautoresponse = '<!DOCTYPE html>
<html lang="es-CO">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0,  user-scalable=no" />
    <meta name="theme-color" content="#000000" />
    <title>Mack Trucks - Colombia</title>
</head>

<body>
    
    <!--Inicio Mailling Mack -->
    <table width="100%" heigth="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#f1f1f1" style="background: #f1f1f1;">
        <tbody>
            <tr>
                <td valign="middle" align="center">
                    <table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
                        <tbody>
                            <tr>
                                <td valign="top" align="center">
                                    <table width="600" cellspacing="0" cellpadding="0" border="0" align="center">
                                        <tbody>
                                            <tr>
                                                <td valign="middle" align="center">
                                                    <table width="165" cellspacing="0" cellpadding="0" border="0">
                                                        <tbody>
                                                            <tr>
                                                                <td valign="middle" align="center">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="line-height:30px;font-size:30px"
                                                                    valign="middle" align="center" height="50">&nbsp;
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
                        <tbody>
                            <tr>
                                <td valign="top" align="center">
                                    <table width="600" cellspacing="0" cellpadding="0" border="0" align="center"
                                        bgcolor="#000000"
                                        style="display:table;border-top:3px solid #87754e;border-radius:8px 8px 0px 0px">
                                        <tbody>
                                            <tr>
                                                <td valign="middle" align="center">
                                                    <table width="600" cellspacing="0" cellpadding="0" border="0">
                                                        <tbody>
                                                            <tr>
                                                                <td style="line-height:30px;font-size:30px"
                                                                    valign="middle" align="center" height="30">&nbsp;
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td valign="top" align="center"
                                                                    style="font-family:Open Sans,Verdana,Arial;font-size:12px;color:#a1a1a1;font-weight:normal;line-height:14px">
                                                                    <img src="https://pracodidacol.com/mackanthem/assets/images/logo.png"
                                                                        style="height:50px" class="CToWUd a6T"
                                                                        tabindex="0">
                                                                    <div class="a6S" dir="ltr"
                                                                        style="opacity: 0.01; left: 343.312px; top: 79px;">
                                                                        <div id=":3dj"
                                                                            class="T-I J-J5-Ji aQv T-I-ax7 L3 a5q"
                                                                            role="button" tabindex="0"
                                                                            aria-label="Descargar el archivo adjunto "
                                                                            data-tooltip-class="a1V"
                                                                            data-tooltip="Descargar">
                                                                            <div class="akn">
                                                                                <div class="aSK J-J5-Ji aYr"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="line-height:30px;font-size:30px"
                                                                    valign="middle" align="center" height="30">&nbsp;
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
                        <tbody>
                            <tr>
                                <td valign="top" align="center">
                                    <table width="600" cellspacing="0" cellpadding="0" border="0" align="center">
                                        <tbody>
                                            <tr>
                                                <td valign="middle" bgcolor="#ffffff" align="center">
                                                    <table width="510" cellspacing="0" cellpadding="0" border="0">
                                                        <tbody>
                                                            <tr>
                                                                <td style="line-height:35px;font-size:35px"
                                                                    valign="middle" align="center" height="20">&nbsp;
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-family:Open Sans,Verdana,Arial;font-size:20px;color:#87754e;font-weight:bold;line-height:38px" valign="middle" align="center">
                                                                    <u></u>Apreciado(a) Cliente '.$name.' '.$lastname.':<u></u>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-family:Open Sans,Verdana,Arial;font-size:25px;color:#3a3a37;font-weight:bold;line-height:28px"
                                                                    valign="middle" align="center">
                                                                    <u></u>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="line-height:15px;font-size:15px"
                                                                    valign="middle" align="center" height="10">&nbsp;
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-family:Open Sans,Verdana,Arial;text-align:justify;font-size:12px;color:#4d4d4d;font-weight:normal;line-height:25px;padding:0 0 15px;border-bottom:1px dashed #d2d2d2" valign="middle" align="center">
                    
                                                                    <p style="width:100%">De acuerdo con tu <b>autorización para el uso y tratamiento de datos e información personal (Ley 1581 de 2012)</b> realizada el <b>07/04/2021</b> y previa consulta de nuestra política de protección de datos personales publicada en <a href="http://www.pracodidacol.com" target="_blank" data-saferedirecturl="https://www.google.com/url?q=http://www.pracodidacol.com&amp;source=gmail&amp;ust=1622730196189000&amp;usg=AFQjCNG_LJacVMmPuz7XHOTXvVr8kwV_lA" style="color:#87754e">www.pracodidacol.com</a>.</p>
                                                                    <p>*Has aceptado de manera previa, expresa e informada nuestra política y finalidades para el tratamiento de tus datos personales el <b>día: 07/04/2021, hora: 11:04</b> y mediante el <b>correo electrónico:</b> <a href="mailto:'.$email.'" target="_blank" style="color:#87754e">'.$email.'</a>.</p>
                                                                    <p>**Recuerda que en cualquier momento puedes dejar de recibir estos correos. Puedes contactarnos haciendo uso de nuestros canales institucionales: <b>PBX: 4238300 ext 11245 Correo: <a href="mailto:didacol@didacol.com" target="_blank" style="color:#87754e">didacol@didacol.com</a> Celular 3223642635</b></p>
                                                                    <p>*AVISO LEGAL. En virtud de lo establecido en la Ley Estatutaria 1581 de 2012 (Protección de Datos), así como los decretos y demás normas que los reglamenten, complementen, adicionen o modifiquen, las compañías del grupo PRACO DIDACOL S.A.S o INCHCAPE en Colombia, han implementado una política general de protección de datos personales, la cual podrá ser consultada en el siguiente sitio web <a href="http://www.pracodidacol.com" target="_blank" data-saferedirecturl="https://www.google.com/url?q=http://www.pracodidacol.com&amp;source=gmail&amp;ust=1622730196189000&amp;usg=AFQjCNG_LJacVMmPuz7XHOTXvVr8kwV_lA" style="color:#87754e">www.pracodidacol.com</a>. CONFIDENCIAL La información contenida en este correo electrónico y en todos sus archivos anexos, es confidencial y/o privilegiada y solo puede ser utilizada por la(s) persona(s) a la(s) cual(es) está dirigida. Si usted no es el destinatario autorizado, cualquier modificación, retención, difusión, distribución o copia total o parcial de este mensaje y/o de la información contenida en el mismo y/o en sus archivos anexos está prohibida y son sancionadas por la ley.</p>
                                                                    <p>**Si tú no eres el titular que está realizando la suscripción, puedes cancelar la misma enviando un correo a: <a href="mailto:didacol@didacol.com" target="_blank" style="color:#87754e">didacol@didacol.com</a> y/o llamando al número de teléfono: <b>3223642635</b></p>

                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td valign="middle" align="center" height="30">&nbsp;</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
    <!--/ Inicio Mailling Mack -->

    <!--Footer Mailling Mack -->
    <table width="100%" cellspacing="0" cellpadding="0" border="0" align="center" bgcolor="#f1f1f1" style="background: #f1f1f1;">
        <tbody>
            <tr>
                <td valign="top" align="center">
                    <table width="600" cellspacing="0" cellpadding="0" border="0" align="center">
                        <tbody>
                            <tr>
                                <td style="border-top:#efefef solid 1px;border-top:3px solid #87754e;border-radius: 0px 0px 8px 8px" valign="middle" bgcolor="#000000"
                                    align="center">
                                    <table width="400" cellspacing="0" cellpadding="0" border="0">
                                        <tbody>
                                            <tr>
                                                <td style="line-height:30px;font-size:30px" valign="middle"
                                                    align="center" height="30">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td valign="top" align="center"
                                                    style="font-family:Open Sans,Verdana,Arial;font-size:12px;color:#a1a1a1;font-weight:normal;line-height:14px">
                                                    <span
                                                        style="font-family:Open Sans,Verdana,Arial;font-size:12px;color:#a1a1a1;font-weight:normal;line-height:14px">
                                                        Copyright © 2021. Todos los derechos reservados.
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="line-height:30px;font-size:30px" valign="middle"
                                                    align="center" height="30">&nbsp;</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
                        <tbody>
                            <tr>
                                <td valign="top" align="center">
                                    <table width="600" cellspacing="0" cellpadding="0" border="0" align="center">
                                        <tbody>
                                            <tr>
                                                <td valign="middle" align="center">
                                                    <table width="165" cellspacing="0" cellpadding="0" border="0">
                                                        <tbody>
                                                            <tr>
                                                                <td valign="middle" align="center">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="line-height:30px;font-size:30px"
                                                                    valign="middle" align="center" height="70">&nbsp;
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
    <!--/ Footer Mailling Mack -->

</body>

</html>';

        $mail2->IsSMTP();
        $mail2->SMTPAuth = true;
        $mail2->CharSet = 'UTF-8';
        $mail2->Host = "smtp-relay.sendinblue.com"; // A RELLENAR. Aquí pondremos el SMTP a utilizar. Por ej. mail.midominio.com
        $mail2->Username = "contacto@solucionsoft.com"; // A RELLENAR. Email de la cuenta de correo. ej.info@midominio.com La cuenta de correo debe ser creada previamente.
        $mail2->Password = "w3R0vApxWrH7QKEN"; // A RELLENAR. Aqui pondremos la contraseña de la cuenta de correo
        $mail2->Port = 587; // Puerto de conexión al servidor de envio.
        $mail2->From = "no-reply@pracodidacol.com.co"; // A RELLENARDesde donde enviamos (Para mostrar). Puede ser el mismo que el email creado previamente.
        $mail2->FromName = "Mack Landing Anthem"; //A RELLENAR Nombre a mostrar del remitente.
        $mail2->AddAddress($email); // Esta es la dirección a donde enviamos
        $mail2->AddAddress("habeasdata@didacol.com"); // Esta es la dirección a donde enviamos
        $mail2->IsHTML(true); // El correo se envía como HTML
        $mail2->Subject = "Autorización uso de datos - Pracodidacol."; // Este es el titulo del email.
        $mail2->Body = $htmlautoresponse; // Este es el titulo del email.
        $mail2->Send();

        $mail->Body = $body;
        //$exito = true;
        $exito = $mail->Send(); // Envía el correo.
        if($exito){
            header('Location: gracias.php?Error=1');
        }else{
            header('Location: index.php?Error=2');
        }
    } catch (phpmailerException $e) {
        echo $e->errorMessage(); //Pretty error messages from PHPMailer
    } catch (Exception $e) {
        echo $e->getMessage(); //Boring error messages from anything else!
    }


}else{
    header('Location: index.php?Error=3');
}