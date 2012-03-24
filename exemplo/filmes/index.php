<?php session_start() ?>
<?php 
include 'lista_filmes.php';

$pesquisa = '';
if (isset($_POST['pesquisa'])) {
    $pesquisa = $_POST['pesquisa'];
}

$filmes = getFilmes($pesquisa);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Meus Filmes</title>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
        <link rel="stylesheet" type="text/css" href="css/filme.css">
        <!--<link href='http://fonts.googleapis.com/css?family=Euphoria+Script' rel='stylesheet' type='text/css'>-->
        <script src="js/jquery-1.7.1.min.js"></script>
        <script>
            $(function () {
                $('#css-toggle').click(function () {
                    var link = $('link[rel="stylesheet"]');
                    if (link.attr('href') == 'css/filme.css') {
                        link.attr('href', 'css/filme2.css');
                        $(this).text('css/filme2.css');
                    } else {
                        link.attr('href', 'css/filme.css');
                        $(this).text('css/filme.css');
                    }
                });
            });
        </script>
    </head>
    <body>
        <!-- Botão de troca de CSS -->
        <div id="css-toggle" style="z-index: 1000; cursor: pointer; float: left; background-color: white; border: 1px solid black;">css/filme.css</div>
        <div id="conteudo">
            <?php include "topo.php"?>

            <div id="titulo">
                Filmes cadastrados
            </div>
            
            <div id="pesquisa">
                <form action="index.php" method="post">
                    <label for="busca">Pesquisar:</label>
                    <input type="text" name="pesquisa" 
                           value="<?php echo $pesquisa?>" id="busca" onmouseover="document.getElementById('dica').style.display = 'inline';" onmouseout="document.getElementById('dica').style.display = 'none';">
                    <input type="submit" value="OK">
                </form>
            </div>
            <div id="dica">
                Caixa de Pesquisa
            </div>
            
            <br style="clear: both;">
            
            <div id="filmes">
                <?php while ($filme = mysql_fetch_array($filmes)) : ?>
                <div class="filme">
                    <div class="poster">
                        <img src="img/<?php echo $filme['poster'] ?>">
                    </div>
                    <div class="resumo">
                        <div class="titulo_filme"><?php echo $filme['titulo'] ?></div>
                        <div class="genero">Genero: <?php echo $filme['genero'] ?></div>
                        <div class="titulo_original">Titulo Original: <?php echo $filme['titulo_original'] ?></div>
                        <div class="sinopse"><?php echo $filme['sinopse'] ?></div>
                    </div>
                    <br style="clear: both;">
                </div>
                <?php endwhile; ?>
                <br style="clear: both;">
            </div>
        </div>
    </body>
</html>
