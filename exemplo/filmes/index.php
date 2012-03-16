<?php include 'lista_filmes.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Meus Filmes</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="css/filme.css">
        <link href='http://fonts.googleapis.com/css?family=Euphoria+Script' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div id="conteudo">
            <div id="logo">
                <h1>filmes</h1>
            </div>
            <div id="menu">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">Cadastro</a></li>
                    <li><a href="login.html">Login</a></li>
                </ul>
            </div>
            
            <br style="clear: both;">
            
            <div id="chamada">
                Já assistiu? Não? Então encontre um filme
                que te agrade e assista!!
            </div>
            
            <div id="titulo">
                Filmes cadastrados
            </div>
            
            <div id="pesquisa">
                <form action="#" method="post">
                    <label for="busca">Pesquisar:</label>
                    <input type="text" name="pesquisa" id="busca" onmouseover="document.getElementById('dica').style.display = 'inline';" onmouseout="document.getElementById('dica').style.display = 'none';">
                    <input type="submit" value="OK">
                </form>
            </div>
            <div id="dica">
                Caixa de Pesquisa
            </div>
            
            <br style="clear: both;">
            
            <div id="filmes">
                <?php for ($i = 0; $i < count($filmes); $i++) : ?>
                <div class="filme">
                    <div class="poster">
                        <img src="img/<?php echo $filmes[$i]['poster'] ?>">
                    </div>
                    <div class="resumo">
                        <div class="titulo_filme"><?php echo $filmes[$i]['titulo'] ?></div>
                        <div class="genero">Genero: <?php echo $filmes[$i]['genero'] ?></div>
                        <div class="titulo_original">Titulo Original: <?php echo $filmes[$i]['titulo_original'] ?></div>
                        <div class="sinopse"><?php echo $filmes[$i]['sinopse'] ?></div>
                    </div>
                    <br style="clear: both;">
                </div>
                <?php endfor; ?>
                <br style="clear: both;">
            </div>
        </div>
    </body>
</html>
