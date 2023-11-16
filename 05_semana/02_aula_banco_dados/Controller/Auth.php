<?php
// Iniciando sessão
session_start();

// Criando função de login
function login (){

// Verificando se POST está vazio
if (empty($_POST)) {
  // No caso de vazio, redireciona para outra página
  $_SESSION["msg_error"] = "Ops. Houve um erro ao acessar esta página";
  // Redirecionando para página de mensagem
  header("location:../View/message.php");
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
      $_SESSION["user_data"] = $user["name"];
      // Redirecionando para a tela de dashboard
      header("location:../View/dashboard.php");
      // Saindo após redirecionar o usuário
      exit;
    }

  }

  // Caso a varredura não encontre usuário, armazenando informação de erro
  $_SESSION["msg_warning"] = "Usuário ou senha inválidos!!";
  header("location:../View/message.php");
  exit;

}

}

// Criando função de logout
function logout(){
  // Destruindo variável de sessão
  unset($_SESSION["user_data"]);
  // Redirecionando usuário tela de login
  header("location:../index.php");
  // Saindo
  exit;
}

// Criando switch para selecionar usar a função de acordo com operação passada na requisição
switch($_GET["operation"]){
  case "login":
    login();
    break;
  case "logout":
    logout();
    break;
  default:
    $_SESSION["msg_warning"] = "Operação inválida!!!";
    header("location:../View/message.php");
    exit;
}

?>