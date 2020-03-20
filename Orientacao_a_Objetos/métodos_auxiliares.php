<?php

class Post {
  private $titulo;
  private $data;
  private $corpo;
  private $comentarios;
  private $qtComentarios;

  public function setTitulo($t) {
    if (is_string($t) && strlen($t) > 5) {
      $this->titulo = $t;
    }
  }

  public function getTitulo() {
    return $this->titulo;
  }

  public function addComentario($msg) {
    $this->comentarios[] = $msg;
    $this->contarComentarios();
  }

  public function getQuantosComentarios() {
    return $this->qtComentarios;
  }

  // Esse é o método auxiliar, pois  
  // e não pode ser usado fora da classe
  private function contarComentarios() {
    $this->qtComentarios = count($this->comentarios);
  }

}

$post = new Post();

$post->addComentario("Teste");
$post->addComentario("Teste2");
$post->addComentario("Teste3");

echo 'Número de comentário: ' . $post->getQuantosComentarios();

