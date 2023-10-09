<?php

// Na agregação, uma classe precisa de outra para executar sua ação.

class Produtos{
    public $nome;
    public $valor;

    function __construct($nome, $valor){
        $this->nome = $nome;
        $this->valor = $valor;
    }
}

class Carrinho {
    public $produtos;

    public function adiciona(Produtos $produto){
        $this->produtos[] = $produto;
    }

    public function exibe(){
        foreach ($this->produtos as $produto) {
            echo $produto->nome."<br>";
            echo $produto->valor."<hr>";
        }
    }
}

$produto1 = new Produtos('Notebook', "5000");
$produto2 = new Produtos('Celular', "1800");

$carrinho = new Carrinho();
$carrinho->adiciona($produto1);
$carrinho->adiciona($produto2);

$carrinho->exibe();
?>