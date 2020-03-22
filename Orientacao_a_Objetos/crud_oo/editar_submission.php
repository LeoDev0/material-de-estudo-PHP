<?php
include 'contato.class.php';
$contato = new Contato();

if (isset($_GET['id']) && !empty($_GET['id'])) {
  $id = $_GET['id'];
  $nome = $_GET['nome'];
  $email = $_GET['email'];

  $contato->editar($id, $nome, $email);
}

header('Location: index.php');