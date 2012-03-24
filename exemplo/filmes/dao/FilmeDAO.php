<?php
include __DIR__.'/../dto/Filme.php';
include __DIR__.'/../lib/Conexao.php';
class FilmeDAO {
    public static function incluir(Filme $filme) {
        $conexao = new Conexao();
        $conexao->conectar();
        $con = $conexao->getConexao();
        
        $sql = 'insert into filmes (titulo, titulo_original, ano, genero, sinopse, poster) values (?,?,?,?,?,?)';
        $st = $con->prepare($sql);
        $st->bindParam(1, $filme->getTitulo());
        $st->bindParam(2, $filme->getTituloOriginal());
        $st->bindParam(3, $filme->getAno());
        $st->bindParam(4, $filme->getGenero());
        $st->bindParam(5, $filme->getSinopse());
        $st->bindParam(6, $filme->getPoster());
        return $st->execute();
    }
}
?>