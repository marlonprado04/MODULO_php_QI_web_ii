<?php

// Criando array de frutas
$frutas = ["maçã", "banana", "laranja"];

// Desestruturando o array em variáveis individuais, com o método list
list($fruta1, $fruta2, $fruta3) = $frutas;

// Forma alternativa de desestruturar, sem usar o método list 
[$fruta1, $fruta2, $fruta3] = $frutas;

// Printando no console
echo $fruta1 . PHP_EOL;
echo $fruta2 . PHP_EOL;
echo $fruta3 . PHP_EOL;
?>