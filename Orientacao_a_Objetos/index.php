<?php

class Usuario {

  // "public" dá permissão a esse método para ser acessado
  // em qualquer lugar fora dessa classe.
  public function trocarNome($senhaAtual, $novaSenha) {
    // Conectar ao banco de dados.
    // Verificar se a senha atual está correta.
    // Trocar a senha
  }

  // "private" garante que esse método só será acessado
  // única e exclusivamente por essa classe.
  private function conectarAoBanco() {

  }

  // "protected" garante que esse método só pode ser
  // acessado por essa classe ou a extensões dela.
  protected function algumaCoisa() {

  }

}

?>