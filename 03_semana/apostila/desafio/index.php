<?php
session_start();

// Inicialização da lista se não existir
if (!isset($_SESSION['info_list'])) {
  $_SESSION['info_list'] = [];
}

// Adiciona nova informação à lista
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['new_info'])) {
  $new_info = $_POST['new_info'];
  array_push($_SESSION['info_list'], $new_info);
}

// Exclui informação da lista
if (isset($_GET['delete'])) {
  $index = $_GET['delete'];
  unset($_SESSION['info_list'][$index]);
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Informações</title>
</head>

<body>

  <h1>Lista de Informações</h1>

  <ul>
    <?php foreach ($_SESSION['info_list'] as $index => $info): ?>
      <li>
        <a href="details.php?index=<?= $index ?>">
          <?php echo $info; ?>
        </a>
        <a href="?delete=<?= $index ?>" style="color: red; margin-left: 10px;">Excluir</a>
      </li>
    <?php endforeach; ?>
  </ul>

  <a href="form.php">Adicionar Nova Informação</a>

</body>

</html>