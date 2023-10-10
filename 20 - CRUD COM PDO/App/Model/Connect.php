<?php

namespace App\Model;

class Connect{

    private static $instance;

    public static function getConn(){
        
        //  Caso não exista uma instancia, uma instancia é criada. O self é utilizado, pois trata-se de um atributo estático
        //  Ao usar namespaces e classes nativas do php, use uma "\" antes de instanciar uma classe do php
        if(!isset(self::$instance)):
          self::$instance = new \PDO('mysql:host=localhost;dbname=PDO;charset=utf8','root','');  
        endif;
          
        return self::$instance;
    }

}

?>