<?php

abstract class Animal {
  private $nome;

  // o 'abastract' obriga todas as classes filhas dessa classe pai (Animal)
  // a ter o método abstract criado nelas
  abstract function andar();

}

class Cachorro extends Animal {
  private $raça;

  public function andar() {
    echo "Andando...";
  }

  public function setter() {
    echo $this->nome . '<br>';
    echo $this->raça;
  }
}


$c1 = new Cachorro();
$c1->andar();