<?php
include 'contato.class.php';

$nome = $_GET['nome'];
$email = $_GET['email'];

$contato = new Contato();

if (isset($email) && !empty($email)) {
  $contato->adicionar($nome, $email);
}

header('Location: index.php');