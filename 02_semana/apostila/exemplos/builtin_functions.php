<?php

$string = "abcdef";
echo strlen($string) . PHP_EOL;

$array = [1, 2, 3, 4, "a", "b", "c", "d"];
echo count($array) . PHP_EOL;

echo var_dump($array) . PHP_EOL; // Retorna informações de cada posição do array

echo isset($string) . PHP_EOL; // retorna 1

function semRetorno (){
  echo "função executada" . PHP_EOL;
}

?>