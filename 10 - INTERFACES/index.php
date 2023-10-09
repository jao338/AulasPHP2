<?php

interface Crud{
    public function create();
    public function read();
    public function update();
    public function delete();
}

class Noticias implements Crud{

    public function create(){
        echo "Criar";
    }

    public function read(){
        echo "Ler";
    }

    public function update(){
        echo "Atualizar";
    }

    public function delete(){
        echo "Deletar";
    }

}

?>