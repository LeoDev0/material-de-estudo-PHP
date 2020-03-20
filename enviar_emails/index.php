<?php


// Só funciona o envio de emails com PHP se o script estiver rodando
// dentro de um servidor web real na internet (hospedagem de sites).  
if(isset($_POST['nome']) && !empty($_POST['nome'])) {
  $nome = addslashes($_POST['nome']);
  $email = addslashes($_POST['email']);
  $msg = addslashes($_POST['msg']);

  $para = "elliot.231@tutanota.com";
  $assunto = "Vaga de estágio";
  $corpo = "Nome: " . $nome . ", Email: " . $email . "- Mensagem: " . $msg;
  $cabecalho = "From: leo.80@protonmail.com" . "\r\n" .   // <--- \r e \n são caracteres para pular linha em diferentes SO.
               "Reply-To: " . $email . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

  mail($para, $assunto, $corpo, $cabecalho);

  echo "<h2>Email enviado com sucesso</h2>";
  echo '<a href="index.php">Voltar</a>';
  exit;
}


?>

<form method="post">
  <label for="nome">Nome:</label><br>
  <input type="text" name="nome"><br><br>

  <label for="email">Email:</label><br>
  <input type="text" name="email"><br><br>

  <label for="msg">Mensagem:</label><br>
  <textarea name="msg"></textarea><br><br>

  <button>Enviar</button>

</form>