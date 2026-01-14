<?php

define("QUEBRAR_LINHA", "<br>");

interface AnimaisInterface {
    public function emitirSom();
}

abstract class Animais implements AnimaisInterface {
    public $nome;

    public function emitirSom() {
        return "ola mundo!"; // so quando não implementei nas classes filhas vai executar esse return
    }
}

class Cachorro extends Animais {

    public function __construct($nome){
        $this->nome = $nome;
    }

    public function emitirSom() {
        return "O {$this->nome} diz: Au au" . QUEBRA_LINHA;
    }
}

class Gato extends Animais {

    public function __construct($nome){
        $this->nome = $nome;
    }

    public function emitirSom() {
        return "O {$this->nome} diz: Miau Miau" . QUEBRA_LINHA;
    }
}

class Papagaio extends Animais {
    public $nome;

    public function __construct($nome){
        $this->nome = $nome;
    }

    public function emitirSom() {
        return "O {$this->nome} diz: Olá Loro" . QUEBRA_LINHA;
    }
}

$cachorro = new Cachorro("Thor");
echo $cachorro->emitirSom();

$gato = new Gato("Bigode");
echo $gato->emitirSom();

$papagaio = new Papagaio("Rico");
echo $papagaio->emitirSom();