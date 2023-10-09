<?php

//  É possível usar a sintaxe abaixo

/*
    use \classes\Produto;

    $produto = new Produto();
*/

require 'classes/produto.php';
require 'models/produto.php';

$produto = new \models\Produto();
$produto->mostrarDetalhes();

?>