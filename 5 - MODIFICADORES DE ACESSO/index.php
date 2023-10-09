<?php

// Usando public é possível acessar dentro e fora de clasee qualque método e atributo

//  Usando protected é possível acessar seus atributos e métodos apenas dentro do escopo da própria classe OU de suas classe herdeiras

//  Usando private é possível acessar seus atributos e métodos APENAS dentro do escopo da própria classe

class Veiculo{

    protected $modelo;
    public $cor;
    public $ano;

    public function Andar(){
        echo "Andou";
    }

    public function Parar(){
        echo "Parou";
    }

    public function setModelo($m){
        $this->modelo = $m;
    }

    public function getModelo(){
        return $this->modelo;
    }

}

class Carro extends Veiculo{

    public function ligarLimpador(){
        echo 'Limpando...';
    }

}

class Moto extends Veiculo{

    public function darGrau(){
        echo 'Dando grau';
    }

}

$veiculo = new Veiculo();
$veiculo->setModelo("Hilux");

echo $veiculo->getModelo();

?>