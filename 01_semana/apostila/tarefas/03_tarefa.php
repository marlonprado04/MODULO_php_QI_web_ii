<?php

// Recebendo valores de peso e altura
$peso = 65.0;
$altura = 1.65;

// Calculando o IMC e formatando para só duas casas decimais
$imc = $peso / ($altura ** 2);
// Formatando para ter 2 casas decimal
$imc = number_format($imc, 2);

// Verificando faixas de IMC para homens
if ($imc <= 18.5) {
  $mensagem = "Magreza";
} elseif ($imc <= 24.9) {
  $mensagem = "Normal";
} elseif ($imc <= 29.9) {
  $mensagem = "Sobrepeso";
} elseif ($imc <= 34.9) {
  $mensagem = "Obesidade grau I";
} elseif ($imc <= 39.9) {
  $mensagem = "Obesidade grau II";
}else{
  $mensagem = "Obesidade grau III";

}

// Imprimindo mensagem no console 
echo "Seu IMC se classifica como: $mensagem e o valor dele é $imc \n";
?>