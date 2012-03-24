<?php
include 'banco.php';
include 'dao/UsuarioDAO.php';

session_start();

$login = $_POST['login'];
$senha = $_POST['senha'];

$erros = '';
if (empty($login)) {
    $erros = 'Informe o login.<br>';
}
if (empty($senha)) {
    $erros .= 'Informe a senha.<br>';
}

if (!empty($erros)) {
    $_SESSION['erro_login'] = $erros;
    header('Location: login.php');
    die;
}

$senha = md5($senha);

/*$sql = 'select id, login 
    from usuarios 
    where login = "'.$login.'" 
    and senha = "'.$senha.'"';
$con = getConexao();
$rs = executaConsulta($sql, $con);
if (!$usuario = mysql_fetch_array($rs)) {
    $_SESSION['erro_login'] = 'Usuário e/ou senha inválidos';
    header('Location: login.php');
    die;
}*/

$usuario = UsuarioDAO::selecionar($login, $senha);
if (empty($usuario)) {
    $_SESSION['erro_login'] = 'Usuário e/ou senha inválidos';
    header('Location: login.php');
    die;
}

$_SESSION['usuario'] = $usuario;
header('Location: index.php');
?>
