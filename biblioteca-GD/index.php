<?php

$imagem = 'bnd.png';

list($larguraOriginal, $alturaOriginal) = getimagesize($imagem);
list($larguraMini, $alturaMini) = getimagesize('mini.png');

$imagemFinal = imagecreatetruecolor($larguraOriginal, $alturaOriginal);

$imagemOriginal = imagecreatefrompng('bnd.png');
$imagemMini = imagecreatefrompng('mini.png');


imagecopy($imagemFinal, $imagemOriginal, 0, 0, 0, 0,
  $larguraOriginal, $alturaOriginal);

imagecopy($imagemFinal, $imagemMini, 1150, 530, 0, 0,
  $larguraMini, $alturaMini);

// header("Content-Type: image/png");
// imagepng($imagemFinal, null);
imagepng($imagemFinal, 'imagem_marca-dagua.png');




?>