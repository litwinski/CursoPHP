<!DOCTYPE html>
<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    die;
}

if (!isset($_SESSION['filme'])) {
    $filme = array(
        'id' => '',
        'titulo'=> '',
        'titulo_original' => '',
        'ano' => '',
        'genero' => '',
        'sinopse' => '',
        'poster' => ''
    );
} else {
    $filme = $_SESSION['filme'];
    unset($_SESSION['filme']);
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
            <form action="processa_cadastro.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="filme[id]" value="<?php echo $filme['id']?>">
                <input type="hidden" name="acao" value="salvar">
                <label for="titulo">T&iacute;tulo</label>
                <input type="text" id="titulo_filme" name="filme[titulo]" value="<?php echo $filme['titulo']?>">
                <br>
                <label for="titulo_original">T&iacute;tulo Original</label>
                <input type="text" id="titulo_original" name="filme[titulo_original]" value="<?php echo $filme['titulo_original']?>">
                <br>
                <label for="ano">Ano</label>
                <input type="text" id="ano" name="filme[ano]" value="<?php echo $filme['ano']?>">
                <br>
                <label for="genero">Genero</label>
                <input type="text" id="genero" name="filme[genero]" value="<?php echo $filme['genero']?>">
                <br>
                <label for="sinopse">Sinopse</label>
                <textarea id="sinopse" name="filme[sinopse]" cols="40" rows="5"><?php echo $filme['sinopse']?></textarea>
                <br>
                <label for="poster">Poster</label>
                <input type="file" id="poster" name="filme[poster]" value="<?php echo $filme['poster']?>">
                <br>
                <label>&nbsp;</label>
                <input type="submit" value="Enviar">
            </form>
            
        </div>
    </body>
</html>