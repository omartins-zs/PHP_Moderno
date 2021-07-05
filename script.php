<?php
ini_set('display_errors', 0);
session_start();

$categorias = [];
$categorias[] = 'Infantil';
$categorias[] = 'Adolescente';
$categorias[] = 'Adulto';
$categorias[] = 'Idoso';

// print_r($categorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];
// var_dump($nome);
// var_dump($idade);
// return 0;

if (empty($nome)) {
    $_SESSION['mensagem de erro'] = 'O nome nao pode ser vazio, por favor preencha com seus dados';
    header('Location: index.php');
    return;
} else if (strlen($nome) < 3) {
    $_SESSION['mensagem de erro'] = 'O nome deve conter mais de 3 caracteres';
    header('Location: index.php');
    return;
} else if (strlen($nome) > 40) {
    $_SESSION['mensagem de erro'] = 'O nome e muito extenso';
    header('Location: index.php');
    return;
} else if (!is_numeric($idade)) {
    $_SESSION['mensagem de erro'] = 'Informe um numero para a sua idade';
    header('Location: index.php');
    return;
}



if ($idade >= 6 && $idade <= 12) {
    for ($i = 0; $i <= count($categorias); $i++) {
        if ($categorias[$i] == 'Infantil') {
            $_SESSION['mensagem de sucesso'] = "O Nadador "  .  $nome .  " compete na categoria Infantl " .  $categorias[$i];
            header('Location: index.php');
            return;
        }
    }
} else if ($idade >= 13 && $idade <= 18) {
    for ($i = 0; $i <= count($categorias); $i++) {
        if ($categorias[$i] == 'Adolescentes') {
            $_SESSION['mensagem de sucesso'] = "O Nadador " .  $nome .  " compete na categoria" .  $categorias[$i];
            header('Location: index.php');
            return;
        }
    }
} else {
    for ($i = 0; $i <= count($categorias); $i++) {
        if ($categorias[$i] == 'Adulto') {
            $_SESSION['mensagem de sucesso']  = "O Nadador " . $nome .  " compete na categoria Adulto";
            header('Location: index.php');
            return;
        }
    }
}
