<?php

namespace App\Model;

    class ProdutoDAO{

        public function create(Produto $p){


            $sql = "INSERT INTO Produtos (Nome, Descricao) VALUES(?,?)";

            $stmt = Connect::getConn()->prepare($sql);

            $stmt->bindValue(1, $p->getNome()); //Vincula um valor a um espaço reservado nomeado ou ponto de interrogação.
            $stmt->bindValue(2, $p->getDescricao()); //Vincula um valor a um espaço reservado nomeado ou ponto de interrogação.

            $stmt->execute();   //Executa uma instrução "preparada" 


        }

        public function read(){

            $sql = 'SELECT * FROM Produtos';

            $stmt = Connect::getConn()->prepare($sql);  //Prepara uma instrução SQL para ser executada
            $stmt->execute();   //Executa uma instrução "preparada" 

            //Verifica se $stmt possui ao menos um registro.
            if($stmt->rowCount() > 0){

                $res = $stmt->fetchAll(\PDO::FETCH_ASSOC);  //Retorna um array contendo todas as linhas

                return $res;
            }else{
                return [];
            }

        }

        public function update(Produto $p){

            $sql = 'UPDATE Produtos SET Nome = ?, Descricao = ? WHERE Id = ?';

            $stmt = Connect::getConn()->prepare($sql);

            $stmt->bindValue(1,$p->getNome());
            $stmt->bindValue(2,$p->getDescricao());
            $stmt->bindValue(3,$p->getId());

            $stmt->execute();

        }

        public function delete($id){

            $sql = 'DELETE FROM Produtos WHERE Id = ?';

            $stmt = Connect::getConn()->prepare($sql);
            $stmt->bindValue(1, $id);

            $stmt->execute();

        }

    }

?>