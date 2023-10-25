<?php

$numero = 0;

while ($numero <= 100) {

  if ($numero % 2 != 0) {
    echo "Número: " . $numero . PHP_EOL;
    $numero++;
  }else{
    $numero++;
  }


}
?>