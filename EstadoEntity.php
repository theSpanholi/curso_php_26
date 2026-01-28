<?php

require_once "./EntityAbstract.php";

// Model || Entity
 class EstadoEntity extends EntityAbstract {
    public $nome;
    public $sigla;

    public function __construct()
    {
        $this->tabelaNome = "estado";
    }

 }