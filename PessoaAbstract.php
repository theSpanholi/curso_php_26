<?php 

define("QUEBRAR_LINHA", "<br>");

abstract class PessoaAbstract {
    public $nome;
    public $idade;
    public $logradouro;
    public $cep;
    public $bairro;
    public $cidade;
    public $estado;
    public $numero;
    public $complemento;
    public $pontoReferencia;

    public function resetarPessoa() {
        $this->nome = " ";
        $this->idade = " ";
        $this->logradouro = " ";
        $this->cep = " ";
        $this->bairro = " ";
        $this->cidade = " ";
        $this->estado = " ";
        $this->numero = " ";
        $this->complemento = " ";
        $this->pontoReferencia = " ";
    }

    public function validarCPF($cpf) {
        echo "123.456.789-11";
    }

    public function validarCNPJ($cnpj) {
        echo "12.345.678/0001-11";
    }
}