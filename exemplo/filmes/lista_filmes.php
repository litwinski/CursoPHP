<?php
function getFilmes($genero = null, $ordenado = false) {
    $filmes = array(
        array(
            'poster' => 'avengers.jpg',
            'titulo' => 'Os Vingadores',
            'genero' => 'A&ccedil;&atilde;o',
            'titulo_original' => 'The Avengers',
            'sinopse' => 'Homem de Ferro, Capit&atilde;o Am&aacute;rica, Thor, Hulk, etc.',
            'ano' => 2000
        ),
        array(
            'poster' => 'avengers.jpg',
            'titulo' => 'Os Vingadores',
            'genero' => 'A&ccedil;&atilde;o',
            'titulo_original' => 'The Avengers',
            'sinopse' => '1999 - Homem de Ferro, Capit&atilde;o Am&aacute;rica, Thor, Hulk, etc.',
            'ano' => 1999
        ),
        array(
            'poster' => 'batman.jpg',
            'titulo' => 'Cavaleiro das Trevas Renasce',
            'genero' => 'A&ccedil;&atilde;o',
            'titulo_original' => 'Dark Knight Rises',
            'sinopse' => 'Terceiro filme do Batman!'
        ),
        array(
            'poster' => 'iceage4.jpg',
            'titulo' => 'Era do Gelo 4',
            'genero' => 'Com&eacute;dia',
            'titulo_original' => 'Ice Age 4',
            'sinopse' => 'Mais um filme com Scratch!'
        ),
        array(
            'poster' => 'spider.jpg',
            'titulo' => 'O Espetacular Homem Aranha',
            'genero' => 'A&ccedil;&atilde;o',
            'titulo_original' => 'The Amazing Spiderman',
            'sinopse' => 'DE NOVO????'
        ),
        array(
            'poster' => 'total.jpg',
            'titulo' => 'Vingador do Futuro',
            'genero' => 'A&ccedil;&atilde;o',
            'titulo_original' => 'Total Recall',
            'sinopse' => 'Refilmagem do clássico de 90'
        ),
        array(
            'poster' => 'batman.jpg',
            'titulo' => 'Cavaleiro das Trevas',
            'genero' => 'A&ccedil;&atilde;o',
            'titulo_original' => 'Dark Knight',
            'sinopse' => 'Segundo filme do Batman!'
        )
    );
    
    $filmes_retorno = array();
    if (empty($genero))
        $filmes_retorno = $filmes;
    else
        foreach($filmes as $filme)
        {
            if ($genero == $filme['genero'])
                $filmes_retorno[] = $filme;
        }
    
    if ($ordenado)
        usort($filmes_retorno, 'cmp');
    
    return $filmes_retorno;
}
//echo '<pre>';
//var_dump($filmes);
//echo '</pre>';


function cmp($a, $b)
{   
    if ($a['titulo'] == $b['titulo']) {
        if ($a['ano'] == $b['ano'])
            return 0;
        return ($a['ano'] < $b['ano']) ? -1 : 1;
    }
    return ($a['titulo'] < $b['titulo']) ? -1 : 1;
}
?>