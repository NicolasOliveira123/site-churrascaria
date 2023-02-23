<?php 
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['msg'];
$data_envio = date('d/m/y');
$hora_envio = date('H:i:s');

$arquivo = "
   <html>
       <p><b>Nome: </b>$nome</p>
       <p><b>E-mail: </b>$email</p>
       <p><b>Mensagem: </b>$mensagem</p>
       <p>Este e-mail foi enviado em <b>$data_envio</b> ás <b>$hora_envio</b></p>
   </html>
";


$destino = "zemarcelo26@gmail.com";
$assunto = "e-mail pelo site";

//variáveis obrigatório para garantir a exibição correta dos caracteres
$headers = "MIME-Version: 1.0/n";
$headers = "Content-type: text/html; charset=iso-8859-1/n";
$headers = "From: $nome <$email>";

//enviar
mail($destino, $assunto, $arquivo, $headers);

echo "<meta http-equiv='refresh' content='10;URL=../rodape_contato_envia.php'>";

?>