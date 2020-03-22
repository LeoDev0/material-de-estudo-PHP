<?php
class Calculadora {

  private $n;

  public function __construct($numeroInicial) {
    $this->n = $numeroInicial;
  }

  public function soma($n1) {
    $this->n += $n1;
    return $this;
  }

  public function subtracao($n1) {
    $this->n -= $n1;
    return $this;
  }

  public function divisao($n1) {
    $this->n /= $n1;
    return $this;
  }

  public function multiplica($n1) {
    $this->n *= $n1;
    return $this;
  }

  public function resultado() {
    return $this->n;
  }

}

$calculadora = new Calculadora(1);
$calculadora->subtracao(1)->soma(3)->multiplica(2)->divisao(3);
echo $calculadora->resultado();
?>