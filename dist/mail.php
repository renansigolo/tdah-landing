<?php
$to = "contatolivedesign@gmail.com";
$subject = "TDAH Website";
$headers = "From: contatolivedesign@gmail.com";
$name = $_REQUEST['name'];
$email = $_REQUEST['email'] ;
$message = $_REQUEST['message'] ;
$txt = "Nome: $name\n\n Email: $email \n\n Mensagem: \n\n $message";

mail($to,$subject,$txt,$headers);

header("Location: https://www.livedesign.com.br/thanks.html"); /* Redirect browser */
?>
