<?php
ini_set('display_errors', 0);
session_start();
include 'services/serviceMensagemSession.php';
include 'services/serviceValidation.php';
include 'services/serviceCategoriaCompetidor.php';

// print_r($categorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];

defineCategoriaCompetidor($nome, $idade);

header('Location: index.php');

// var_dump($nome);
// var_dump($idade);
// return 0;