<?php
$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = "leo";
$dbpass = "leo123";

try {
  $pdo = new PDO($dsn, $dbuser, $dbpass);

  $sql = "SELECT * FROM usuarios";
  $sql = $pdo->query($sql);

  // Forma alternativa de fazer a mesma coisa
  // $sql = $pdo->query($sql)->fetchAll();
  //
  // if (count($sql) > 0) {
  //   foreach ($sql as $usuario) {
  //     echo "Nome: " . $usuario['nome'] . '<br />';
  //   }
  // } else {
  //   echo "Não há usuários cadastrados";
  // }

  // Checando se há algum resultado na tabela
  if ($sql->rowCount() > 0) {
    foreach ($sql->fetchAll() as $usuario) {
      echo "Nome: " . $usuario['nome'] . " - Email: " . $usuario['email'] . '<br />';
    }

  } else {
    echo "Não há usuários cadastrados";
  }

} catch (PDOException $e) {
  die('Erro: ' . $e->getMessage());
}




 ?>
