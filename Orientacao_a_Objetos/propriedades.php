<?php

class Cachorro {

  // Só o "$nome" pode ser chamado do lado de fora da class é "public"
  public $nome;
  private $idade;
}

$c1 = new Cachorro();
$c1->nome = "Lulu";

echo "O nome do meu cachorro é $c1->nome";

?>