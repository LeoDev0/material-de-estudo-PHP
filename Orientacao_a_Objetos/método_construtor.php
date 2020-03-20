<?php

class Post {
  private $titulo;
  private $data;
  private $corpo;

  // O método '__construct' é sempre o primeiro a ser executado
  public function __construct($t, $c) {
    $this->setTitulo($t);
    $this->setCorpo($c);
  }

  public function setTitulo($t) {
    if (is_string($t) && strlen($t) > 5) {
      $this->titulo = $t;
    }
  }

  public function getTitulo() {
    return $this->titulo;
  }

  public function setCorpo($c) {
    if (is_string($c)) {
      $this->corpo = $c;
    }
  }

  public function getCorpo() {
    return $this->corpo;
  }

}

// Os argumentos do método construct são passados no momento em que se instancia a classe
$post1 = new Post("Título do post", "Corpo da primeira postagem.");

echo '<b>Título:</b> ' . $post1->getTitulo() . '<br>';
echo '<b>Corpo:</b> ' . $post1->getCorpo();