<?php

// Criando array de notas
$notas = [
  "nota1" => 10,
  "nota2" => 10,
  "nota3" => 10
];

$media = (
  $notas["nota1"]
  + $notas["nota2"]
  + $notas["nota3"])
  / 3;

if ($media >= 8 && $media <= 10) {
  echo "Seu conceito de avaliação foi: A \n";
} else if ($media >= 6 && $media < 8) {
  echo "Seu conceito de avaliação foi: B \n";
} else if ($media >= 3 && $media < 6) {
  echo "Seu conceito de avaliação foi: C \n";
} else if($media >= 0 && $media < 3){
  echo "Seu conceito de avaliação foi: D \n";
}else if($media <0 || $media > 10){
  echo "Seu conceito de avaliação foi: Indefinido \n";
}


?>