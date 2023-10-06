<?php

class Pessoa{
    public $nome;
    public $idade;
    public $altura;

    public function Falar(){
        echo "Meu nome é ".$this->nome.", eu tenho ".$this->idade." anos e a minha altura é ".$this->altura;
    }
}

$jao = new Pessoa();

$jao->nome = "João Henrique dos Santos Pereira";
$jao->idade = 22;
$jao->altura = 1.74;

$jao->Falar();

?>