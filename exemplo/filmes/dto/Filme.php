<?php

class Filme {
    private $id;
    private $titulo;
    private $titulooriginal;
    private $ano;
    private $genero;
    private $sinopse;
    private $poster;
    
    public function __construct($filme) {
        $this->id = $filme['id'];
        $this->titulo = $filme['titulo'];
        $this->titulooriginal = $filme['titulo_original'];
        $this->ano = $filme['ano'];
        $this->genero = $filme['genero'];
        $this->sinopse = $filme['sinopse'];
        $this->poster = $filme['poster'];
    }
    
    public function __call($name, $arguments) {
        if (strpos($name,'get') !== false) {
            $atributo = strtolower(substr($name, 3));
            return $this->$atributo;
        }
    }
}

?>
