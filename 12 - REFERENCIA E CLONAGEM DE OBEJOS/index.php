<?php

// $pessoa2 é um objeto que faz referência ao objeto $pessoa
//  Na linha 14, por meio do objeto $pessoa2, que por sua vez faz referêcia ao objeto $pessoa, definimos a idade para 35
//  $pessoa3 é um objeto clone de $pessoa
//  O método mágico __clone é inicializado sempre que a palavra chave 'clone' for usada

class Pessoa{
    public $idade;

    public function __clone(){
        echo "Clonagem de objetos";
    }
}

$pessoa = new Pessoa();

$pessoa->idade = 25;

$pessoa2 = $pessoa;
$pessoa2->idade = 35;

$pessoa3 = clone $pessoa;
$pessoa3->idade = 45;

echo $pessoa->idade;
echo $pessoa2->idade;
echo $pessoa3->idade;

?>