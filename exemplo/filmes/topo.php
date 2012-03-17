<?php session_start() ?>
        <div id="logo">
                <h1>filmes</h1>
            </div>
            <div id="menu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <?php if (isset($_SESSION['usuario'])) :?>
                        <li><a href="#">Cadastro</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    <?php endif;?>
                    <?php if (!isset($_SESSION['usuario'])) :?>
                        <li><a href="login.php">Login</a></li>
                    <?php endif;?>                        
                </ul>
            </div>
            
            <br style="clear: both;">
            
            <div id="chamada">
                Já assistiu? Não? Então encontre um filme
                que te agrade e assista!!
            </div>