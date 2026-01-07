<?php
/**
 * POO || OOP
 * Programacao Orientada a Objeto
 * Caracteristicas: Propriedades || Atributos.
 * */ 

define("QUEBRA_LINHA", "<br>");

class Carro {
    private $ligado = false;
    private $marca;
    public $modelo;
    public $ano;
    public $cor;
    public $combustivel;

    public function __construct($chave) {
        if (!$chave) {
            echo "Impossível ligar o carro sem a chave." . QUEBRA_LINHA;
            return;
        }
    }

    public function setMarca($marca) {
        $this->marca = $marca;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function getLigado() {
        $situacaoCarro = $this->ligado ? "LIGADO" : "DESLIGADO";

        echo $situacaoCarro . QUEBRA_LINHA;
    }

    public function ligar() {
        if ($this->ligado) {
            echo "O Carro já esta ligado." . QUEBRA_LINHA;
            return;
        }

        if (!$this->combustivel) {
            echo "Impossível ligar o carro sem combustivel, GAS: $this->combustivel." . QUEBRA_LINHA;
            return;
        }

        $this->ligado = true;
        echo "Carro esta ligado." . QUEBRA_LINHA;
    }

    public function desligar() {

        if (!$this->ligado) {
            echo "O Carro já esta desligado." . QUEBRA_LINHA;
            return;
        }

        $this->ligado = false;
        echo "Carro esta desligado." . QUEBRA_LINHA;
    }

    public function __toString() {
         $dadosDoCarro = "Marca: $this->marca" . QUEBRA_LINHA .
         "Modelo: $this->modelo" . QUEBRA_LINHA .
         "Ano: $this->ano" . QUEBRA_LINHA .
         "Cor: $this->cor" . QUEBRA_LINHA .
         "combustivel: $this->combustivel" . QUEBRA_LINHA ;

         return $dadosDoCarro;
    }
}

$chave = "presencial";
$objCarro = new Carro($chave); // instancia 1

$objCarro->setMarca("Hyundai");
$objCarro->modelo = "I30";
$objCarro->ano = "2015";
$objCarro->cor = "prata";
$objCarro->combustivel = "gasolina";

$objCarro->getLigado();
$objCarro->ligar();
$objCarro->getLigado();
echo $objCarro;

echo QUEBRA_LINHA;

$objCarro = new Carro($chave); // instancia 2
$objCarro->setMarca("Fiat");
$objCarro->modelo = "Palio";
$objCarro->ano = "2025";
$objCarro->cor = "azul";
$objCarro->combustivel = "gasolina";

$objCarro->getLigado();
$objCarro->desligar();
echo $objCarro;

echo"<h2>Tema de casa</h2>";

class Cachorro {
    public $raça;
    public $idade;
    public $pelugem;
    public $alimento;
    public $caracteristicaPrincipal;
    public $estado;
}

$objCachorro = new Cachorro();

$objCachorro->raça = "bordercolie";
$objCachorro->idade = "8";
$objCachorro->pelugem = "Vermelho-merle";
$objCachorro->alimento = "Ração";
$objCachorro->caracteristicaPrincipal = "Inteligência e Energia";