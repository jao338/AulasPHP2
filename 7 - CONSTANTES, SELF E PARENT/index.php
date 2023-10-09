<?php

class Pessoa{

    const nome = "Pessoa";

    public function exibirNome(){
        echo self::nome;
    }

}

class Jao extends Pessoa{
    const nome = "João";

    public function exibirNome(){
        echo self::nome."<br>";
    }
}

class Rodrigo extends Pessoa{

    public function exibirNome(){
        echo parent::nome;
    }
}

$jao = new Jao();
$rodrigo = new Rodrigo();

$jao->exibirNome();
$rodrigo->exibirNome();

?>