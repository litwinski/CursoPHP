<?php
session_start();

$titulo = $_POST['titulo'];
$titulo_original = $_POST['titulo_original'];
$ano = $_POST['ano'];
$genero = $_POST['genero'];
$sinopse = $_POST['sinopse'];

$erros = '';
if (empty($titulo)) {
    $erros = 'Informe o título.<br>';
}
if (empty($titulo_original)) {
    $erros .= 'Informe o título original.<br>';
}

if (!empty($erros)) {
    $_SESSION['erro_cadastro'] = $erros;
    header('Location: cadastroFilme.php');
    die;
}

//chamar a função do banco

header('Location: index.php');
?>
