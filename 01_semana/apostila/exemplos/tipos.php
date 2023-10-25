<?php

$nome = "Marlon"; // string
print('Tipo da variável $nome é: ' . gettype($nome). "\n");

$idade = 23; // integer
print('Tipo da variável $idade é: ' . gettype($idade). "\n");

$preco = 5.99; // float
print('Tipo da variável $preco é: ' . gettype($preco). "\n");

$isTrue = true; // boolean
print('Tipo da variável $isTrue é: ' . gettype($isTrue). "\n");

$arrayDeNumeros = [1, 2, 3, 4, 5, 6]; // array
print('Tipo da variável $arrayDeNumeros é: ' . gettype($arrayDeNumeros). "\n");

// Array associado
$arrayAssociado = [
  "nome" => "Rafael",
  "idade" => "25",
];
print('Tipo da variável $arrayAssociado é: ' . gettype($arrayAssociado). "\n");

?>