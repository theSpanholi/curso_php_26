<?php

require_once "./PessoaAbstract.php";

define("QUEBRAR_LINHA", "<br>");

class PessoaFisica extends PessoaAbstract{
    public $CPF;

    public function __construct()
    {
        $this->resetarPessoa(); 
        $this->CPF = " ";  
    }

    public function validar(){
        $cpf = $this->CPF;
        $this->validarCPF($cpf);
    }

    private function validarNome(){
        if(!$this->nome){
            throw new Exception("O nome não pode estar em branco!");
        }
    }
}