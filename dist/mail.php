<?php
$to = "renan.sigolo@gmail.com";
$subject = "TDAH Website";
$headers = "From: renan.sigolo@gmail.com";
$name = $_REQUEST['name'];
$email = $_REQUEST['email'] ;
$message = $_REQUEST['message'] ;
$txt = "Nome: $name\n\n Email: $email \n\n Mensagem: \n\n $message";

mail($to,$subject,$txt,$headers);

header("Location: https://www.renansigolo.com.br/thanks.html"); /* Redirect browser */
?>
