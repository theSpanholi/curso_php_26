<?php
// POO || OOP
// Programação Orientada a Objeto

/**
 * Caracterísicas: Propriedades || Atributos.
 */

class Carro {
    private $marca;
    public $modelo;
    public $ano;
    public $cor;
    public $combustivel;
    public $nivelDeCombustivel;
    private $bateria = true;


    public function setMarca($marca) {
        $this->marca = $marca;
    }

    public function getMarca(){
        return $this->marca;
    }
}

$objCarro = new Carro();

$objCarro-> setMarca("Hyundai");
$objCarro->modelo="I30";
$objCarro->ano="2009";
$objCarro->cor="prata";
$objCarro->combustivel="gasolina";
$nivelDeCombustivel="50";