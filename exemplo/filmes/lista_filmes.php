<?php
include 'banco.php';
function getFilmes($filtro, $colunaOrdenar = 'titulo') {
    $con = getConexao();

    $sql = 'select * from filmes ';
    if (!empty($filtro)) {
        $sql .= ' where titulo like "%'.$filtro.'%"';
    }
    $sql .= ' order by '.$colunaOrdenar;
    return executaConsulta($sql, $con);
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