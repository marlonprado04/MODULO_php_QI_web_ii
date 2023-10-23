<?php

// Função sem parâmetro
function minhaPrimeiraFuncao()
{
  echo "Hello World \n";
}

// Chamando função
minhaPrimeiraFuncao();


// Função com parâmetro
function imprimirBoasVindas($nome)
{
  echo "Bem vindo " . $nome . "!\n";
}
// Chamando função
imprimirBoasVindas("Joãozinho");


// ---------------------------------------------

// Função com parâmetro passado por referência

// Variável inicia vazia
$mensagemFora = ""; 

echo "echo 1: " . $mensagemFora . "\n";

function imprimirSegundaMensagem(&$mensagemDentro)
{
  // Armazenamos "Nova mensagem" na variável que passarmos como parâmetro ao chamar a função
  $mensagemDentro = "Nova mensagem";

}

// Armazena novo valor na variável passada através da função
imprimirSegundaMensagem($mensagemFora);

echo "echo 2: " . $mensagemFora . "\n";

// --------------------------------------------


// Exemplo de função com return

// Função retorna a soma de dois números passados
function somar($n1, $n2){
  return $n1 + $n2;
}

// Imprimindo o que for retornado da função
echo "A soma dos números é " . somar(5, 7) . "\n";


?>