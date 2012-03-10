<html>
    <head>
        <title>PHP</title>
    </head>
    <body>
        <!-- TESTE -->

        <?php 
        //comentário de uma linha

        # comentário de uma linha estilo PERL

        /*
         * Comentário de bloco
         */
        $cidade = 'Salvador';
        $estado = 'BA';
        echo ' - ' . $cidade . ' - ' . $estado;
        echo '<br>';
        echo date('d/m/Y');
        echo '<br>';
        
        echo $_SERVER['SERVER_NAME'];
        echo getenv('OS');
        ?>
    </body>
</html>