<?php

// Uma classe abstrata é instanciada uma única vez

class Login{

    public static $user;

    public static function verificaLogin(){
        echo "O usuário " .self::$user. " está logado";
    }

    public function sairSitema(){
        echo "<br>Saindo...";
    }
}

//  Para acessar seus métodos e atributos use a sintaxe abaixo.
Login::$user = "admin";
Login::verificaLogin();

$login = new Login();
$login->sairSitema();

?>