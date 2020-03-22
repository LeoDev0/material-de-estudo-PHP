<?php
include 'contato.class.php';
$contato = new Contato();

if (!empty($_GET['id'])) {
  $id = $_GET['id'];
} else {
  header('Location: index.php');
  exit;
}

$info = $contato->getDados($id);
?>

<form action="editar_submission.php" method="get">
  <label for="nome">Nome:</label>
  <input type="text" name="nome" value="<?= $info['nome'] ?>">
  <label for="email">Email:</label>
  <input type="email" name="email" value="<?= $info['email'] ?>">
  <input type="hidden" name="id" value="<?= $info['id'] ?>">
  <button>Adicionar</button>
</form>