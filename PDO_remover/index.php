<?php

$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = "leo";
$dbpass = "leo123";

try {
  $pdo = new PDO($dsn, $dbuser, $dbpass);
  $sql = "DELETE FROM usuarios WHERE nome = 'Testador 2'";
  $sql = $pdo->query($sql);

  echo "Usuário apagado";

} catch (PDOException $e) {
  echo "Erro: " . $e->getMessage();
}


 ?>
