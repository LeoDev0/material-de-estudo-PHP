<?php

// namespaces servem para usar classes de mesmo nome na mesma aplicação

// Na prática, serve para organizar melhor o seu código, agrupando classes e 
// evitando o conflito de nomes, como por exemplo, com classes de terceiros.

// Você pode utilizá-lo para separar módulos, grupos de classes ou da forma que 
// você entender que irá melhor organizar e encapsular o seu código.
require 'classes/matematica/basico.php';

use classes\matematica\Basico;

$basico = new Basico();
$basico->math();