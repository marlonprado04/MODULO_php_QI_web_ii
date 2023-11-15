<?php
session_start();

// Exibir detalhes da informação
if (isset($_GET['index'])) {
  $index = $_GET['index'];
  $info = $_SESSION['info_list'][$index];
} else {
  header("Location: index.php");
  exit();
}

// Excluir informação
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_info'])) {
  unset($_SESSION['info_list'][$index]);
  header("Location: index.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detalhes da Informação</title>
</head>

<body>

  <h1>Detalhes da Informação</h1>

  <p>
    <?php echo $info; ?>
  </p>

  <form action="" method="post">
    <input type="hidden" name="delete_info">
    <button type="submit" style="color: red;">Excluir Informação</button>
  </form>

  <a href="index.php">Voltar para a Lista</a>

</body>

</html>