<?php

//  Acontece quando um objeto "utiliza" outro, porém, sem que eles dependam um do outro
//  Definimos o valor do atributo cliente como um objeto da classe cliente do objeto $pedido

class Pedido{
    public $numero;
    public $cliente;
}

class Cliente{
    public $nome;
    public $endereco;
}

$cliente = new Cliente();
$pedido = new Pedido();

$cliente->nome = "João Henrique";
$cliente->endereco = "Rua XX, número: 777";

$pedido->numero = '123';
$pedido->cliente = $cliente;

$dados = array(
    'numero' => $pedido->numero,
    'nome_cliente' => $pedido->cliente->nome,
    'endereco_cliente' => $pedido->cliente->endereco
);

var_dump($dados);

?>