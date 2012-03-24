<!DOCTYPE html>
<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    die;
}
?>


<html>
    <head>
        <title>Meus Filmes</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="css/filme.css">
        <!--<link href='http://fonts.googleapis.com/css?family=Euphoria+Script' rel='stylesheet' type='text/css'>-->
    </head>
    <body>
        <div id="conteudo">
            <?php include 'topo.php'?>
            
            <div id="titulo">
                Cadastro de Filme
            </div>
            
            <br style="clear: both;">
            
            <?php if (isset($_SESSION['erro_cadastro'])):?>
                <div id="erro"><?php echo $_SESSION['erro_cadastro']?></div>
                <?php unset($_SESSION['erro_cadastro']);?>
            <?php endif;?>
            <form action="processa_cadastro.php" method="post">
                <label for="titulo">T&iacute;tulo</label>
                <input type="text" id="titulo_filme" name="titulo">
                <br>
                <label for="titulo_original">T&iacute;tulo Original</label>
                <input type="text" id="titulo_original" name="titulo_original">
                <br>
                <label for="ano">Ano</label>
                <input type="text" id="ano" name="ano">
                <br>
                <label for="genero">Genero</label>
                <input type="text" id="genero" name="genero">
                <br>
                <label for="sinopse">Sinopse</label>
                <textarea id="sinopse" name="sinopse" cols="40" rows="5"></textarea>
                <br>
                <label>&nbsp;</label>
                <input type="submit" value="Enviar">
            </form>
            
        </div>
    </body>
</html>
