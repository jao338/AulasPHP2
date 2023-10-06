<?php

class Veiculo{

    public $modelo;
    public $cor;
    public $ano;

    public function Andar(){
        echo "Andou";
    }

    public function Parar(){
        echo "Parou";
    }

}

class Carro extends Veiculo{

}

class Moto extends Veiculo{

}

$carro = new Carro();

$carro->modelo = "Gol";
$carro->ano = 2018;
$carro->cor = "Vinho";

$carro->Andar();

?>