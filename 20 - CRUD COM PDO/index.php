<?php

    // Importa todas as classes com autoload por meio do composer.
    require_once "vendor/autoload.php";

    $produtoDAO = new \App\Model\ProdutoDAO();
    $produto = new \App\Model\Produto();

    //  Create
    $produto->setNome("Produto");
    $produto->setDescricao("Descrição do produto");
    $produtoDAO->create($produto);

    $produto->setNome("Produto");
    $produto->setDescricao("Descriçaõ do produto");
    $produtoDAO->create($produto);

    //  Update
    $produtoDAO->update($produto);

    //  Delete
    $produtoDAO->delete(6);

    //  Read

    foreach ($produtoDAO->read() as $produto) {
        echo $produto['Nome']."<br>".$produto['Descricao']."<br>";
    }

?>