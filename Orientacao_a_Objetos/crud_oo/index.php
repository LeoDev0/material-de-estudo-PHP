<?php
include 'contato.class.php';

$contato = new Contato();

// $contato->adicionar("Suporte", "suporte@b7web.com.br");
// echo $contato->getNome("suporte@b7web.com.br");

// $lista = $contato->getAll();
// print_r($lista);

// $contato->editar('Suporte b7web', 'suporte@b7web.com.br');

// $excluir = $contato->excluir('suporte@b7web.com.br');
// echo $excluir ? 'Contato excluído' : 'Contato não existe';
?>

<h1>Contatos</h1>

<br>

<h3>Novo contato</h3>
<form action="adicionar.php" method="get">
  <label for="nome">Nome:</label>
  <input type="text" name="nome">
  <label for="email">Email:</label>
  <input type="email" name="email">
  <button>Adicionar</button>
</form>

<br><br>

<table border="1" width="600">

  <tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Email</th>
    <th>Ações</th>
  </tr>

  <?php 
  $lista = $contato->getAll();
  foreach($lista as $item):
  ?>
    <tr>
      <td><?= $item['id'] ?></td>
      <td><?= $item['nome'] ?></td>
      <td><?= $item['email'] ?></td>
      <td>
        <a href="excluir.php?id=<?= $item['id'] ?>">[ EXCLUIR ]</a>
        <a href="editar.php?id=<?= $item['id'] ?>">[ EDITAR ]</a>
      </td>
    </tr>
  <?php endforeach; ?>

</table>

