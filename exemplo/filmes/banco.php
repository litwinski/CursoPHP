<?php

function getConexao() {
    $con = mysql_connect('localhost', 'root', '');
    if (!$con) {
        die('Não foi possível conectar: ' . mysql_error());
    }
    mysql_select_db('CatalogoFilmes',$con);
    return $con;
}

function executaConsulta($sql, $con) {
    $retorno = mysql_query($sql,$con);
    if (!$retorno) {
        die('Erro na consulta: ' . mysql_error());
    } 
    return $retorno;
}
?>
