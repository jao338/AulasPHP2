<?php

class Login2{
    private $email;
    private $senha;
    private $nome;

    public function __construct($nome, $email, $senha){
        $this->setNome($nome);
        $this->setEmail($email);
        $this->setSenha($senha);
    }

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

    public function getNome(){
        return $this->nome;
    }

    public function setNome($n){
        $this->nome = $n;
    }

    public function Login(){
        if($this->email == "joaohenriquerc123@gmail.com" AND $this->senha == "123456"){
            echo "Login feito com sucesso!";
        }else{
            echo "Dados inválidos";
        }
    }
}

$user = new Login2("João Henrique dos Santos Pereira", "joaohenriquerc123@gmail.com", "123456");

$user->Login();

?>