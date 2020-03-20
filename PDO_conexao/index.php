<?php

$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = "leo";
$dbpass = "leo123";

try {
  $pdo = new PDO($dsn, $dbuser, $dbpass);

  echo 'Conexão estabelecida com sucesso!';

} catch (PDOException $e) {
  echo "Falhou: " . $e->getMessage();
  // die("Falhou: " . $e->getMessage());
}

 ?>
