<?php
include 'dao/FilmeDAO.php';

session_start();

$filmeArray = $_POST['filme'];
/*
$titulo = $_POST['titulo'];
$titulo_original = $_POST['titulo_original'];
$ano = $_POST['ano'];
$genero = $_POST['genero'];
$sinopse = $_POST['sinopse'];
*/

$erros = '';
if (empty($filmeArray['titulo'])) {
    $erros = 'Informe o título.<br>';
}
if (empty($filmeArray['titulo_original'])) {
    $erros .= 'Informe o título original.<br>';
}

if (!empty($erros)) {
    $_SESSION['erro_cadastro'] = $erros;
    $_SESSION['filme'] = $filmeArray;
    header('Location: cadastroFilme.php');
    die;
}

/*
$filmeArray = array(
    'id' => '',
    'titulo'=>$titulo,
    'titulo_original' => $titulo_original,
    'ano' => $ano,
    'genero' => $genero,
    'sinopse' => $sinopse,
    'poster' => ''
);
*/

$filme = new Filme($filmeArray);

FilmeDAO::incluir($filme);

header('Location: index.php');
?>
