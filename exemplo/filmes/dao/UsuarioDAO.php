<?php
include __DIR__.'/../lib/Conexao.php';
class UsuarioDAO {
    public static function selecionar($login, $senha) {
        $conexao = new Conexao();
        $conexao->conectar();
        $con = $conexao->getConexao();
        
        $sql = 'select id, login from usuarios where login = ? and senha = ?';
        $st = $con->prepare($sql);
        $st->bindParam(1, $login);
        $st->bindParam(2, $senha);
        $st->execute();
        return $st->fetch(PDO::FETCH_ASSOC);
    }
}

?>
