<?php

class Login{

    public static $user;

    public static function verificaLogin(){
        echo "O usuário " .self::$user. " está logado";
    }

    public function sairSitema(){
        echo "Saindo...";
    }
}

Login::$user = "admin";
Login::verificaLogin();

$login = new Login();
$login->sairSitema();

?>