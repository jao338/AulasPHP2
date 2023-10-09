<?php

class Pessoa{
    private $dados = array();

    public function __set($nome,$valor){
        $this->dados[$nome]= $valor;
    }

    public function __get($nome){
        return $this->dados[$nome];
    }

    public function __toString(){
        return "Não é um objeto<br>";
    }

    public function __invoke(){
        return "Não é uma função<br>";
    }
}

$pessoa = new Pessoa();

$pessoa->nome = "Danilo";
$pessoa->idade = 50;
$pessoa->sexo = "M";

echo $pessoa->nome."<br>";
echo $pessoa->idade."<br>";
echo $pessoa->sexo."<br>";

echo $pessoa;
echo $pessoa();
?>