<?php 

if(!isset($_GET['nombre'])){
    die("necesita un nombre");
}
if(!isset($_GET['email'])){
    die("necesita un email");
}
if(!isset($_GET['mensaje'])){
    die("necesita un mensaje");
}

$nombre = $_GET['nombre'];
$email = $_GET['email'];
$mensaje = $_GET['mensaje'];

$to = 'alvarojuan2014@gmail.com';
$subject = 'Consulta desde la web';
$message = 'hello ' . $nombre . 'el siguiente mensaje es: ' . "\r\n";
$message .= $mensaje;
$headers = 'From: '. $email . "\r\n" .
'Reply-To: ' . $email . "\r\n" .
'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers); 

?>