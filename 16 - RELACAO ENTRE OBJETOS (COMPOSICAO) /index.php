<?php

// NA composição, uma classe cria uma instância de outra classe dentro de si própria, sendo assim, quando essa classe for destruída, a outra classe também será..

class Pessoa{
    public function atribuiNome($nome){
        return "Você é um ".$nome;
    }
}

class Exibe{
    public $pessoa;
    public $nome;

    function __construct($nome){
        $this->pessoa = new Pessoa();
        $this->nome = $nome;
    }

    public function exibeNome(){
        echo $this->pessoa->atribuiNome($this->nome);
    }
}

$exibe = new Exibe("Jão");
$exibe->exibeNome();

?>