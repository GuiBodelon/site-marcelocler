<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $message = $_POST["message"];

  // Configurações de envio de email
  $to = "contato@marcelocler.com.br"; // Endereço de email para onde você deseja enviar as mensagens
  $subject = "Novo contato de: " . $name; // Assunto do email
  $from = "no-reply@marcelocler.com.br"; // Endereço de email do remetente personalizado

  // Corpo da mensagem
  $body = "Nome: " . $name . "\n";
  $body .= "Email: " . $email . "\n";
  $body .= "Telefone: " . $phone . "\n";
  $body .= "Mensagem: " . $message . "\n";

  // Cabeçalhos do email
  $headers = "From: " . $from . "\r\n";
  $headers .= "Reply-To: " . $email . "\r\n";

  // Envia o email
  if (mail($to, $subject, $body, $headers)) {
    echo "success";
  } else {
    echo "error";
  }
}
?>