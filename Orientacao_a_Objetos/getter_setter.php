<?php

// O objetivo principal de usar Getter & Setter é utilizar validações nos inputs do usuário
// quando se for instanciar as classes.
class Post {
  private $titulo;
  private $data;
  private $corpo;

  public function setTitulo($t) {
    if (is_string($t) && strlen($t) > 5) {
      $this->titulo = $t;
    }
  }

  public function getTitulo() {
    return $this->titulo;
  }

}

$post1 = new Post();
$post1->setTitulo('Título 1');

echo 'Título do post1: ' . $post1->getTitulo();