<?php

class Login{
    private $email;
    private $senha;

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($e){

        $email = filter_var($e, FILTER_SANITIZE_EMAIL);

        $this->email = $email;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($s){
        $this->senha = $s;
    }

    public function Login(){
        if($this->email == "teste@teste.com" AND $this->senha == "123456"){
            echo "Login feito com sucesso!";
        }else{
            echo "Dados inválidos";
        }
    }
}

$user = new Login();

$user->setEmail("joaohenriquerc123@gmail.com");
$user->setSenha("123456");

$user->Login();

?>