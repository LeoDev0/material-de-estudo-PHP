<?php

$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = "leo";
$dbpass = "leo123";

try {

  // $nome = "Teste";
  // $id = 6;

  $nome = "João";
  $email = "joao@gmail.com";
  $senha = "12345";

  $pdo = new PDO($dsn, $dbuser, $dbpass);
  // $sql = "UPDATE usuarios SET nome = :nome WHERE id = :id";
  $sql = "INSERT INTO usuarios VALUES (null, :nome, :email, :senha)";
  $sql = $pdo->prepare($sql);

  // $sql->bindValue(":nome", $nome);
  // $sql->bindValue(":id", $id);
  $sql->bindValue(":nome", $nome);
  $sql->bindValue(":email", $email);
  $sql->bindValue(":senha", $senha);
  $sql->execute();

  // echo "Usuário atualizado com sucesso";
  echo "Usuário adicionado com sucesso";


} catch (PDOException $e) {
  die('Erro: ' . $e->getMessage());
}


 ?>
