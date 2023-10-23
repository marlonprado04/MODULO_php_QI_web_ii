<?php

$idade = 25;

// Idade é maior ou igual a 18 anos? 
if ($idade >= 18) {
  // No caso de true 
  echo "Você é maior de idade.";
} else {
  // No caso de false
  echo "Você é menor de idade";
}

// SWITCH

$diaSemana = "segunda";

// 
switch ($diaSemana) {
  case "segunda":
    echo "Hoje é segunda \n";
    break; // Necessário para interromper execução
  case "terça":
    echo "Hoje é terça \n";
    break;
  default: // Opção padrão, caso nenhuma seja atendida
    echo "Dia da semana indefinido \n ";
}

// FOR

$arrayDeNumeros = [2, 4, 6, 8, 10];
$tamanhoDoArray = count($arrayDeNumeros);

for ($contador = 0; $contador < $tamanhoDoArray; $contador++) {

  echo "O número " . $arrayDeNumeros[$contador] . " está na posição " . $contador . PHP_EOL;
}

// WHILE

$arrayDeNumeros = [2, 4, 6, 8, 10];
$tamanhoDoArray = count($arrayDeNumeros);

$contador = 0; // Declara contador

while ($contador < $tamanhoDoArray) {

  echo "O número " . $arrayDeNumeros[$contador] . " está na posição " . $contador . PHP_EOL;

  $contador++; // Incrementa contador
}

// DO WHILE

$arrayDeNumeros = [2, 4, 6, 8, 10];
$tamanhoDoArray = count($arrayDeNumeros);

$contador = 0; // Declara contador

do {
  echo "O número " . $arrayDeNumeros[$contador] . " está na posição " . $contador . PHP_EOL;

  $contador++; // Incrementa contador


} while ($contador < $tamanhoDoArray);

?>