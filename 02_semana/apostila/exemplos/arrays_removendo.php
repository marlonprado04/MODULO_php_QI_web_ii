<?php

// Criando array simples de frutas
$frutas = ["maça","banana","manga"];

// Criando array de pessoa
$pessoa = [
    "nome" => "Marlon",
    "idade"=> 23,
    "cidade"=> "Porto Alegre",
];

// Removendo valor da 2ª posição do array de frutas
unset($frutas[1]);

// Removendo a propriedade com chave "cidade"
unset($pessoa["cidade"]);

// Imprimindo os dois arrays modificados
echo "Pessoa: " . var_dump($pessoa) . " Frutas: " . var_dump($frutas);

?>