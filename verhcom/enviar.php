<?php
if(isset($_POST['EMAILI'])) {

// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
$email_to = "everastegui.r@hotmail.com";
$email_subject = "Mensaje WebPage Verhcom";

// Aquí se deberían validar los datos ingresados por el usuario
if(!isset($_POST['NOMBRE']) ||
!isset($_POST['EMAILI']) ||
!isset($_POST['TELEFONO']) ||
!isset($_POST['MENSAJE'])) {

echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
die();
}

$email_message = "Consulta de: " . $_POST['NOMBRE'] . "\n";
$email_message .= "Email: " . $_POST['EMAILI'] . "\n";
$email_message .= "Telefono: " . $_POST['TELEFONO'] . "\n\n ";
$email_message .= "Consulta: " . $_POST['MENSAJE'] . "\n\n  ";


// Ahora se envía el e-mail usando la función mail() de PHP
$headers = 'From: '.$_POST['EMAILI']."\r\n".
'Reply-To: '.$_POST['EMAILI']."\r\n" .
'X-Mailer: PHP/' . phpversion();

if (mail($email_to, $email_subject, $email_message, $headers)) {
         echo "<script language='javascript'>
            alert('Mensaje Enviado, Le responderemos a la brevedad prosible. Muchas Gracias');
         </script>";
		 include 'index.html';
    } else {
		include 'index.html';
         echo "<script language='javascript'>
            alert('Fallo envio, puede comunicarse con nosotros por nuestro Whatsapp o Facebook');
         </script>";
		 
    }
}

?>