<?php
session_start();

// Editar informação existente
if (isset($_GET['edit'])) {
  $index = $_GET['edit'];
  $edit_info = $_SESSION['info_list'][$index];
} else {
  $edit_info = "";
}

// Atualizar informação existente
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_info'])) {
  $index = $_POST['index'];
  $_SESSION['info_list'][$index] = $_POST['update_info'];
  header("Location: index.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário</title>
</head>

<body>

  <h1>Formulário</h1>

  <form action="" method="POST">
    <label for="info">Informação:</label>
    <input type="text" id="info" name="update_info" value="<?php echo $edit_info; ?>">
    <input type="hidden" name="index" value="<?php echo isset($index) ? $index : ''; ?>">
    <button type="submit">Atualizar Informação</button>
  </form>

</body>

</html>