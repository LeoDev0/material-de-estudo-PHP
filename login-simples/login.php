<?php
require_once "config.php";

session_start();

if (isset($_POST['senha']) && !empty($_POST['senha'])) {
  $email = $_POST['email'];
  $senha = md5($_POST['senha']);


  $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
  $sql = $pdo->query($sql);

  if ($sql->rowCount() > 0) {
    $dado = $sql->fetch();

    $_SESSION['id'] = $dado['id'];

    header("Location: index.php");
  } else {
    echo "Usuário ou senha incorreto.";
  }


}

 ?>


<h2>Página de Login</h2>

<form method="post">
  <label for="email">Email:</label><br>
  <input type="text" name="email"><br><br>

  <label for="senha">Senha:</label><br>
  <input type="password" name="senha"><br><br>
  <button>Entrar</button>
</form>
