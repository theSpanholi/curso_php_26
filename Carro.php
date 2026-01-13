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

echo "<h3>Cachorro</h3>";
class Cachorro {
    public $raca;
    public $idade;
    public $corPelugem;
    public $alimento;
    public $caracteristicaPrincipal;
    private $graveto = true;

    public function brincarComCachorro($energia = true){
        if(!$energia){
            echo "Deixe o cachorro descansar." . QUEBRA_LINHA;
        }
        else if (!$this->graveto){
            echo "Voce já jogou o Graveto, espere o cachorro voltar." . QUEBRA_LINHA;
        } else {
            echo "Jogue o graveto para o cachorro." . QUEBRA_LINHA;
        }
    }
    public function __toString(){
        $dadosDoCachorro = "Raça:$this->raca" . QUEBRA_LINHA .
        "Pelugem:$this->corPelugem" . QUEBRA_LINHA .
        "Idade:$this->idade" . QUEBRA_LINHA .
        "Alimento:$this->alimento" . QUEBRA_LINHA .
        "Caractéristica:$this->caracteristicaPrincipal" . QUEBRA_LINHA;

        return $dadosDoCachorro;
    }
}

$objCachorro = new Cachorro();

$objCachorro->raca = "Border-collie";
$objCachorro->idade = "8";
$objCachorro->corPelugem = "Vermelho-merle";
$objCachorro->alimento = "Ração";
$objCachorro->caracteristicaPrincipal = "Inteligência e Energia";

$objCachorro->brincarComCachorro();
echo $objCachorro;

echo "<h3>Gato</h3>";

class Gato {
    public $racaGato;
    public $idadeGato;
    public $pelugemGato;
    public $alimentoGato;
    public $caracteristicaPrincipalGato;

    public function carinhoNoGato($alcance = false){
        if(!$alcance){
            echo "Pode fazer carinho";
        } else {
            echo "Chame o Gato para fazer carinho";
        }
    }

    public function __tooString(){
        $dadosDoGato = "Raça:$this->racaGato" . QUEBRA_LINHA .
        "Idade:$this->idadeGato" . QUEBRA_LINHA .
        "Pelugem:$this->pelugemGato" . QUEBRA_LINHA .
        "Alimento:$this->alimentoGato" . QUEBRA_LINHA .
        "Caractéristicas:$this->caracteristicaPrincipalGato";

        return $dadosDoGato;
    }



}

$objGato = new Gato();

$objGato->racaGato = "Persa";
$objGato->idadeGato = "5";
$objGato->pelugemGato = "Longa, densa, sedosa e volumosa";
$objGato->caracteristicaPrincipalGato = "Calmo e Dócil";
$objGato->alimentoGato = "Rações Super Premium específicas para a raça";
