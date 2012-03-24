<?php
class Conexao {
    private $host;
    private $banco;
    private $porta;
    private $usuario;
    private $senha;
    private $con;
    private $tipoBanco;
    
    function __construct($tipoBanco = 'mysql',
                        $host = 'localhost',
                        $banco = 'CatalogoFilmes',
                        $porta = '3306',
                        $usuario = 'root',
                        $senha = '') {
        $this->tipoBanco = $tipoBanco;
        $this->host = $host;
        $this->banco = $banco;
        $this->porta = $porta;
        $this->usuario = $usuario;
        $this->senha = $senha;
        $this->con = null;
        
    }
    
    public function conectar() {
        $this->con = new PDO($this->tipoBanco.':host='.$this->host.';port='.$this->porta.';dbname='.$this->banco, $this->usuario, $this->senha);
    }
    
    public function getConexao() {
        return $this->con;
    }
}

?>