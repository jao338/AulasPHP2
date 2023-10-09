<?php

//  Uma classe abstrata é uma classe que contém pelo menos um método abstrato. Um método abstrato é um método declarado, mas sem nenhuma implementação.

abstract class Banco{

    protected $saldo;
    protected $limiteSaque;
    protected $juros;

    public function setSaldo($s){
        $this->saldo = $s;
    }

    public function getSaldo(){
        return $this->saldo;
    }

    abstract protected function Sacar($s);
    abstract protected function Depositar($s);

}

class Itau extends Banco{

    public function Sacar ($s){
        $this->saldo -= $s;
    }

    public function Depositar ($s){
        $this->saldo += $s;
    }
}

$itau = new Itau();
$itau->setSaldo(1000);

echo "<hr> Saldo: ".$itau->getSaldo();
$itau->Sacar(250);
echo "<hr> Saldo: ".$itau->getSaldo();

?>