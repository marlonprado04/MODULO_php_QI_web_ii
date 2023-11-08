<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>PHP Desk Helper - Mensagem do sistema</title>
</head>

<body>

  <!-- Abrindo tag PHP para iniciar sessão -->
  <?php
  // Iniciando sessão
  session_start();
  ?>

  <!-- Iniciando tag PHP para fazer verificação da sessão -->
  <?php
  // Verificando se mensagem de erro não está vazia
  if (!$_SESSION["msg_error"]):
  ?>

    <!-- Se sessão não estiver vazia, renderiza mensagem de erro com valor armazenado-->
    <div class="alert alert-danger">
      <p>
        <?=$_SESSION["msg_error"]?>
      </p>
    </div>

    <!-- Abrindo tag PHP para finalizar if via endif -->
    <?php

    // Destruindo informação da sessão após imprimir ela em tela
    unset($_SESSION["msg_error"]);
  endif;
  ?>

  <?php
  // Verificando se mensagem de erro não está vazia
  if (!$_SESSION["msg_warning"]):
    ?>

    <div class="alert alert-warning">
      <p>
        <?=$_SESSION["msg_warning"]?>
      </p>
    </div>

    <?php
    unset($_SESSION["msg_warning"]);
  endif;
  ?>

</body>

</html>