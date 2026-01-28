<?php

require_once "./EntityAbstract.php";

// Model || Entity
class EnderecoEntity extends EntityAbstract {
    public $logradouro;
    public $cep;
    public $bairro;
    public $numero;
    public $complemento;
    public $pontoReferencia;

    public function __construct()
    {
        $this->tabelaNome = "endereco";
    }
}