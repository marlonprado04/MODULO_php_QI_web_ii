<?php
// 1. Crie uma lista de bancos 

// a. A chave de cada array de um banco deverá ser o número da agência
// b. Deve conter as informações: nome, cidade, estado para cada banco.
// c. Adicione os dados da tabela abaixo exatamente como estão


$bancos = [
  [
    "agencia" => 4444,
    "nome" => "Banco 1",
    "cidade" => "Porto Alegre",
    "estado" => "Rio Grande do Sul"
  ],

  [
    "agencia" => 5555,
    "nome" => "Banco 2",
    "cidade" => "Rio de Janeiro",
    "estado" => "Rio de Janeiro"
  ],

  [
    "agencia" => 6666,
    "nome" => "Banco 3",
    "cidade" => "São Paulo",
    "estado" => "São Paulo"
  ],

  [
    "agencia" => 7777,
    "nome" => "Banco 4",
    "cidade" => "Gravataí",
    "estado" => "Santa Catarina"
  ],
];

// 2. Realize operações com a lista de bancos
// a. Liste as informações de todos os bancos cadastrados na lista.
//   Exemplo: “4444 - Banco 1, Porto Alegre, Rio Grande do Sul. ”
// b. Adicione o seguinte banco na última posição da lista de bancos
// c. Remova da lista o banco cujo número de agência = 4444.
// d. Edite o estado do banco da agência 7777 para “Rio Grande do Sul”.

// Listando
for($i = 0; $i < count($bancos); $i++){
  echo $bancos[$i]["agencia"] . " - "
  . $bancos[$i]["nome"] . ", "
  . $bancos[$i]["cidade"] . ", "
  . $bancos[$i]["estado"] . PHP_EOL;
}

// Adicionando ao final
$bancos[] = [
  "agencia" => 8888,
  "nome"=> "Banco 5",
  "cidade"=> "Cachoeirinha",
  "estado"=> "Rio Grande do Sul"
];

// Removendo agencia 4444
for($i = 0; $i < count($bancos); $i++){
  if($bancos[$i]["agencia"] == 4444){
    unset($bancos[$i]);
    break;
  }
}

// Reordenando index do array
$bancos = array_values($bancos);


// Editando estado da agencia 7777
// Laço para percorrer array de arrays
for($i = 0; $i < count($bancos); $i++){
  // Se o array na posição $i estiver com agencia 7777
  if($bancos[$i]["agencia"] == 7777){
    // Muda o estado para Rio Grande do Sul
    $bancos[$i]["estado"] = "Rio Grande do Sul";
    // E depois para execução
    break;
  }
}

for($i = 0; $i < count($bancos); $i++){
  echo $bancos[$i]["agencia"] . " - "
  . $bancos[$i]["nome"] . ", "
  . $bancos[$i]["cidade"] . ", "
  . $bancos[$i]["estado"] . PHP_EOL;
}

?>