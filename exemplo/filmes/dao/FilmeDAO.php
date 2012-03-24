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

    public static function excluir($id) {
        $conexao = new Conexao();
        $conexao->conectar();
        $con = $conexao->getConexao();
        
        $sql = 'delete from filmes where id = ?';
        $st = $con->prepare($sql);
        $st->bindParam(1, $id);
        return $st->execute();
    }
    
    public static function selecionar($id) {
        $conexao = new Conexao();
        $conexao->conectar();
        $con = $conexao->getConexao();
        
        $sql = 'select * from filmes where id = ?';
        $st = $con->prepare($sql);
        $st->bindParam(1, $id);
        $st->execute();
        return $st->fetch(PDO::FETCH_ASSOC);
    }

    public static function alterar(Filme $filme) {
        $conexao = new Conexao();
        $conexao->conectar();
        $con = $conexao->getConexao();
        
        $sql = 'update filmes set titulo = :titulo, titulo_original = :titulo_original, ano = :ano, genero = :genero, sinopse = :sinopse {{poster}} where id = :id';
        $poster = $filme->getPoster();
        if (!empty($poster))
            $sql = str_replace('{{poster}}', ', poster = :poster', $sql);
        else
            $sql = str_replace('{{poster}}', '', $sql);
        $st = $con->prepare($sql);
        $st->bindParam(':titulo', $filme->getTitulo());
        $st->bindParam(':titulo_original', $filme->getTituloOriginal());
        $st->bindParam(':ano', $filme->getAno());
        $st->bindParam(':genero', $filme->getGenero());
        $st->bindParam(':sinopse', $filme->getSinopse());
        if (!empty($poster))
            $st->bindParam(':poster', $filme->getPoster());
        $st->bindParam(':id', $filme->getId());
        return $st->execute();
    }
}
?>