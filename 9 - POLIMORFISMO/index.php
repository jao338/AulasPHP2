<?php

class Animal{
    public function Andar(){
        echo "Andou";
    }

    public function Correr(){
        echo "O animal correu";
    }
}

class Cavalo extends Animal{
    
    public function Andar(){
        $this->Correr();
    }
}

$cavalo = new Cavalo();
$cavalo->Andar();

//  Polimorfismo acontece quando um método herdado é reescrito

?>