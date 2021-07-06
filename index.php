<?php
ini_set('display_errors', 0);
session_start();
include 'services/serviceMensagemSession.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/bulma.css">
  <title>Formulario de inscricao</title>
</head>

<body>


  <div class="container">
    <h5 class="title is-5">Formulario Para Incriçao De Competidores</h5>

    <form class="form" action="script.php" method="POST">
      <?php
      $mensagemDeSucesso = obterMensagemSucesso();
      if (!empty($mensagemDeSucesso)) {
        echo $mensagemDeSucesso;
      }
      $mensagemDeErro = obterMensagemErro();
      if (!empty($mensagemDeErro)) {
        echo $mensagemDeErro;
      }
      ?>

      <div class="field">
        <label class="label"> </label>
        <div class="control">
          <p>Seu Nome: <input class="input is-primary" type="text" name="nome" placeholder="Digite seu nome" /></p>
        </div>
      </div>

      <div class="field">
        <label class="label"> </label>
        <div class="control">
          <p>Sua Idade: <input class="input is-primary" type="text" name="idade" placeholder="Digite seu nome" /></p>
        </div>
      </div>
      <p><input class="button" type="submit" value="Enviar Dados do competidor" /></p>
    </form>

  </div>

</body>

</html>