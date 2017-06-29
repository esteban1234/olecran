<?php
//Librerías para el envío de mail
require('../phpmailer/phpmailer/class.phpmailer.php');

//PHPMailer Object
$mail = new PHPMailer();

// Recoger los valores del Formulario

$nombre = $_POST['txtNOMBRE'];
$telefono = $_POST['txtTELEFONO'];
$correo = $_POST['txtCORREO'];
$comentario = $_POST['txtCOMENTARIO'];

// if (filter_var($, FILTER_VALIDATE_EMAIL)) {
//     echo "Esta dirección de correo ($email_a) es válida.";
// }

$mail->CharSet = 'utf-8';
//From email address and name
$mail->From = $correo;
$mail->FromName = $nombre;

//To address and name
// $mail->addAddress("info@olecram.org");
// $mail->addAddress("ballina.santiago@gmail.com");
$mail->addAddress("eguanova@gmail.com");




$mail->isHTML(true);

$img = "http://paginasprueba.pe.hu/olecran/img/olecran.jpg";

$mail->Subject = "Cotización OLECRAM";
$mail->Body = '

                <html>
                  <body>
                  <header>
                    <div style="background-color:#353e4a; color:#fff;">
                      <figure style="margin:auto; width:40%; padding-bottom:20px;">
                        <img style="width:100%" src='.$img.' alt="">
                      </figure>
                    </div>
                  </header>
                  <section style="border:.5px solid rgb(177, 185, 174);  margin:0px">
                    <div>
                      <p style="background-color:#000; padding:15px; color:#fff"><b>Telefono: <span style="background-color:#fff; padding:15px; color:#000">'. $telefono .'</span><p>
                    </div>

                    <div>
                      <p style="background-color:#000; padding:15px; color:#fff; text-align:center; font-size:20px;">Comentario</p>
                      <p style="text-align:justify">'.$comentario.'</p>
                    </div>
                  </section>
                  </body>
                </html>';


// $mail->AltBody = "This is the plain text version of the email content";

if(!$mail->send())
{

  $html = '<div class="alert alert-dismissible alert-danger">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Error</strong> al enviar los datos.
                </div>';
	// $html = 2;

}
else
{

 $html = '<div class="alert alert-dismissible alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Datos</strong> Enviados Correctamente.
                </div>';

}

echo $html;


?>
