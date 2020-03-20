<?php

$dbname = "blog";
$host = "localhost";
$dbuser = "leo";
$dbpass = "leo123";
$dsn = "mysql:dbname=$dbname;host=$host";

try {
  $pdo = new PDO($dsn, $dbuser, $dbpass);
} catch (PDOException $e) {
  die('Erro: ' . $e->getMessage());
}
 ?>
