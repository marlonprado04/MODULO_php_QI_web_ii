<?php

// Criando array simples de frutas
$frutas = ["maça","banana","manga"];

// Criando array de pessoa
$pessoa = [
    "nome" => "Marlon",
    "idade"=> 23,
    "cidade"=> "Porto Alegre",
];

// Adiciona uma fruta ao final do array
$frutas[] = "pera";

// Adiciona uma chave chamada "pais" e seu valor
$pessoa["pais"] = "Brasil";

// Imprimindo os dois arrays modificados
echo "Pessoa: " . var_dump($pessoa) . " Frutas: " . var_dump($frutas);


?>