<?php

// Iniciando sessão do PHP
session_start();

// Verificando se POST está vazio
if (!empty($_POST)) {

    // Armazenando valores dos inputs nas variáveis
    $money = $_POST["money"];
    $coin = $_POST["coin"];

    // Criando Switch para realizar operação a partir da moeda
    switch ($coin) {
        case "dollar":
            // Armazenando valor da conversão em uma sessão criada
            $_SESSION["amount_dollar"] = convert_money($money, 5);
            break;
        case "euro":
            // Armazenando valor da conversão em uma sessão criada
            $_SESSION["amount_euro"] = convert_money($money, 5.3);
            break;
        default:
    }
} else {

    // Se vazio, armazena na sessão de erro uma mensagem
    $_SESSION["error"] = "Ops. Houve um erro inesperado!!";

    // Redireciona o usuário para o arquivo de mensagem
    header("location:message.php");
}

// Criando função para converter moedas 
function convert_money($money, $tax)
{
    // Retornando valor da moeda convertida
    return $money / $tax;
}
