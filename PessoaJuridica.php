<?php
 
require_once "./PessoaAbstract.php";

define("QUEBRAR_LINHA", "<br>");

class PessoaJuridica extends PessoaAbstract{
    public $CNPJ;

    public function __construct()
    {
        $this->resetarPessoa(); 
        $this->CNPJ = " ";  
    }

    public function validar(){
        $cnpj = $this->CNPJ;
        $this->validarCPF($cnpj);
    }
}