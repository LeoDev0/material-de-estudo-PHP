<?php

// 'interface' é um tipo de template, de modelo para criação de classe
interface Animal {
  
  // todo método de uma interface tem que ser público, e não pode ter código nele. Parâmetros, porém, são aceitos
  public function andar();
}

class Cachorro implements Animal {

  public function andar() {
    echo "Estou andando...";
  }
}

$c1 = new Cachorro();
$c1->andar();