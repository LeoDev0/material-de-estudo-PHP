<?php

if (isset($_POST['nome'])) {
  $nome = $_POST['nome'];
  file_put_contents('teste.txt', $nome . "\n", FILE_APPEND);  // cria o arquivo teste.txt, e adiciona um valor (sem apagar o anterior) dentro dele

  header("Location: index.php");  // essa linha redireciona ao index.php, impedindo que um dado seja enviado duas vezes ao dar refresh na página
}

 ?>

<form method="post">
  <input type="text" name="nome">
  <button>Enviar</button>
</form>
