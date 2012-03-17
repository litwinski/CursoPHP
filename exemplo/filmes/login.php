<!DOCTYPE html>
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
                Login
            </div>
            
            <br style="clear: both;">
            
            <form action="processa_login.php" method="post">
                <label for="login">Usuário</label>
                <input type="text" id="login" name="login">
                <br>
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha">
                <br>
                    <label>&nbsp;</label>
                <input type="submit" value="Enviar">
            </form>
            
        </div>
    </body>
</html>
