<?php session_start() ?>
        <div id="logo">
                <h1>filmes</h1>
            </div>
            <div id="menu">
                <div id="usuario">
                    <?php if (isset($_SESSION['usuario'])) : ?>
                        <?php echo $_SESSION['usuario']['login'] ?>
                    <?php endif; ?>
                </div>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <?php if (isset($_SESSION['usuario'])) :?>
                        <li><a href="cadastroFilme.php">Cadastro</a></li>
                        <li><a href="logout.php">Logoff</a></li>
                    <?php endif;?>
                    <?php if (!isset($_SESSION['usuario'])) :?>
                        <li><a href="login.php">Login</a></li>
                    <?php endif;?>                        
                </ul>
            </div>
            
            <br style="clear: both;">
            
            <div id="chamada">
                J&aacute; assistiu? N&atilde;o? Ent&atilde;o encontre um filme
                que te agrade e assista!!
            </div>