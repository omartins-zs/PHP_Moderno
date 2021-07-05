<?php
ini_set('display_errors', 0);
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Formulario de inscricao</title>
</head>

<body>
  <p>Formulario Para Incriçao De Competidores</p>

  <form action="script.php" method="POST">
    <?php
    $mensagemDeSucesso = isset($_SESSION['mensagem de sucesso']) ? $_SESSION['mensagem de sucesso'] : '';
    if (!empty($mensagemDeSucesso)) {
      echo $mensagemDeSucesso;
    }
    $mensagemDeErro = isset($_SESSION['mensagem de erro']) ? $_SESSION['mensagem de erro'] : '';
    if (!empty($mensagemDeErro)) {
      echo $mensagemDeErro;
    }
    ?>
    <p>Seu Nome: <input type="text" name="nome" /></p>
    <p>Sua Idade: <input type="text" name="idade" /></p>
    <p><input type="submit" value="Enviar Dados do competidor" /></p>
  </form>
</body>

</html>