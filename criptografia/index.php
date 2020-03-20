<?php

$nome = "Leonardo";
$nome2 = md5($nome);   // criptogradia irreversível, que significa que não é possível descriptografar depois
$nome3 = base64_encode($nome);  // criptografia reversível, é possível descriptografar com base64_decode



echo "Nome: $nome";
echo '<br />';
echo "Nome criptografado com md5: $nome2";
echo '<br />';
echo "Nome criptografado com base64: $nome3";
echo '<br />';
echo "Descriptografando base64: " . base64_decode($nome3);


 ?>
