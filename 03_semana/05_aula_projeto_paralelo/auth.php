<?php
// Iniciando sessão
session_start();

// Verificando se POST está vazio
if (empty($_POST)) {
  // No caso de vazio, redireciona para outra página
  $_SESSION["msg_error"] = "Ops. Houve um erro ao acessar esta página";
  // Redirecionando para página de mensagem
  header("location:message.php");
  // Fechando sessão
  exit;

} else {
  // No caso de não vazio, cria variáveis para fazer o trabalho 
  $email = $_POST["user_email"];
  $password = $_POST["user_password"];

  // Criando array para armazenar cadastro de usuários
  $users = array(
    array(
      "name" => "Maria",
      "email" => "maria@gmail.com",
      "password" => password_hash("123456", PASSWORD_DEFAULT)
    ),

    array(
      "name" => "João",
      "email" => "joão@gmail.com",
      "password" => password_hash("123456", PASSWORD_DEFAULT)
    )

  );

  // Varrendo lista de usuários cadastrados
  foreach ($users as $user) {
    // Verifica se email e senha digitados são iguais aos do usuário percorrido atualmente
    if ($user["email"] == $email && password_verify($password, $user["password"])) {
      // Se o email e senha batem, cria uma sessão com nome do usuário
      $_SESSION["name"] = $user["name"];
      // Redirecionando para a tela de dashboard
      header("location:dashboard.php");
      // Saindo após redirecionar o usuário
      exit;
    }

  }

  // Caso a varredura não encontre usuário, armazenando informação de erro
  $_SESSION["msg_warning"] = "Usuário ou senha inválidos!!";
  header("location:message.php");
  exit;

}

?>