<?php

require_once "./EntityAbstract.php";

// Model || Entity
 class CidadeEntity extends EntityAbstract {
    public $nome;
    public $codIbge;

    public function __construct()
    {
        $this->tabelaNome = "cidade";
    }

 }