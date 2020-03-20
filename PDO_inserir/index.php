<?php

$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = "leo";
$dbpass = "leo123";


try {
  $pdo = new PDO($dsn, $dbuser, $dbpass);

  $nome = "Testador 2";
  $email = "teste2@hotmail.com";
  $senha = md5("123");

  $sql = "INSERT INTO usuarios VALUES (null, '$nome', '$email', '$senha')";
  $sql = $pdo->query($sql);

  echo "Usuário inserido: " . $pdo->lastInsertId();

} catch (PDOException $e) {
  die('Erro:' . $e->getMessage());
}



 ?>
