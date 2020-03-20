<?php

$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = "leo";
$dbpass = "leo123";


try {
  $pdo = new PDO($dsn, $dbuser, $dbpass);
  $novaSenha = md5('bundadi');
  $sql = "UPDATE usuarios SET senha = '$novaSenha' WHERE nome = 'Testador'";
  $sql = $pdo->query($sql);

  echo "dados alterados";

} catch (PDOException $e) {
  die('Erro: ' . $e->getMessage());
}


 ?>
