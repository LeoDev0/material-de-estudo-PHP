<?php

class Animal {
  private $nome;

  public function __construct($n) {
    $this->nome = $n;
  }
}

class Cachorro extends Animal {
  private $raça;

  public function __construct($n, $r) {
    $this->nome = $n;
    $this->raça = $r;
  }

  public function setter() {
    echo $this->nome . '<br>';
    echo $this->raça;
  }
}


$c1 = new Cachorro("jow", "labrador");
$c1->setter();