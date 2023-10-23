<?php

$arrayConvencional = [1, 2, 3, 4, 5];

// Imprimindo elemento na posição 0
echo $arrayConvencional[0] . PHP_EOL;

// Imprimindo informações do array
echo var_dump($arrayConvencional) . PHP_EOL;

// ---------------------------------

// Array associativo

$arrayAssociativo = [
  "nome" => "Marlon",
  "idade" => 23,
  "cidade" => "Porto Alegre"
];

echo var_dump($arrayAssociativo) . PHP_EOL;

// Imprime apenas a posição "nome" do array
echo $arrayAssociativo["nome"] . PHP_EOL;

// ---------------------------------

$arrayConvencional = [1, 2, 3, 4, 5];

foreach($arrayConvencional as $numero){
  echo $numero . "\t";
}

$arrayAssociativo = [
  "nome" => "Marlon",
  "idade" => 23,
  "cidade" => "Porto Alegre"
];

foreach($arrayAssociativo as $chave => $valor){

  echo "$chave: $valor" . PHP_EOL;
}
?>