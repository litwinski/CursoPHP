<?php
include 'banco.php';

$login = $_POST['login'];
$senha = $_POST['senha'];
$senha = md5($senha);

$sql = 'select id, login 
    from usuarios 
    where login = "'.$login.'" 
    and senha = "'.$senha.'"';
$con = getConexao();
$rs = executaConsulta($sql, $con);
if (!$usuario = mysql_fetch_array($rs)) {
    die ('Usuário e/ou senha inválidos');
}

session_start();
$_SESSION['usuario'] = $usuario;
header('Location: index.php');
?>
