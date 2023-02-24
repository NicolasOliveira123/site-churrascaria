<?php

use PHPMailer\PHPMailer\PHPMailer;

$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['msg'];
$data_envio = date('d/m/y');
$hora_envio = date('H:i:s');

require 'PHPMailer-master/get_oauth_token.php'

$mail = new PHPMailer;
$mail->isSMTP();

//configurações do servidor de e-mail
$mail->Host = "smtp.gmail.com";
$mail->Port = "587";
$mail->SMTPSecure = "tls";
$mail->SMTPAuth = "true";
$mail->Username = "zemarcelo26@gmail.com";
$mail->Password = "";


//configuração da mensagem
$mail->setFrom($mail->Username,"Nicolas"); //Remetente
$mail->addAddress('zemarcelo26@gmail.com'); //Destinário
$mail->Subject = "Fale Conosco"; //assunto

$conteudo_email = "
Você recebeu uma mensagem de $nome ($email):
<br><br>

Mensagem:<br>
$mensagem
";

//variáveis obrigatório para garantir a exibição correta dos caracteres
$headers = "MIME-Version: 1.0/n";
$headers = "Content-type: text/html; charset=iso-8859-1/n";
$headers = "From: $nome <$email>";

//enviar
mail($destino, $assunto, $arquivo, $headers);

echo "<meta http-equiv='refresh' content='10;URL=../rodape_contato_envia.php'>";


?>