<?php
require 'usuario.php';

$usuario = new Usuario(2);

echo $usuario->getNome();

// $usuario->delete();
// echo 'Usuário deletado';

// $usuario->setEmail('teste@hotmail.com');
// $usuario->setSenha('123');
// $usuario->setNome('Testador');
// $usuario->salvar();
// echo 'Usuário criado com sucesso.';