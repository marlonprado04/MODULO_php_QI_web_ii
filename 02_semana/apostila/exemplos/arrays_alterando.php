<?php

// Criando array simples de frutas
$frutas = ["maça","banana","manga"];

// Criando array de pessoa
$pessoa = [
    "nome" => "Marlon",
    "idade"=> 23,
    "cidade"=> "Porto Alegre",
];

// Trocando valor da 2ª posição do array de frutas
$frutas[1] = "pera";

// Alterando nome da pessoa no array de pessoa
$pessoa["nome"] = "José";

// Imprimindo os dois arrays modificados
echo "Pessoa: " . var_dump($pessoa) . " Frutas: " . var_dump($frutas);


?>