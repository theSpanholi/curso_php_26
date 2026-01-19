<?php

require_once "./PessoaAbstract.php";

class PessoaFisica extends PessoaAbstract{
    public $CPF;

    public function __construct()
    {
        $this->resetarPessoa();
        $this->CPF = "";
    }

    public function validar(){

        $this->validarDados();

        if (!$this->validarCPF($this->CPF)) {
            echo "CPF inválido<br>";
            return false;
        }

        return true;
    }

    private function validarNome(){
        if(!$this->nome){
            throw new Exception("O nome não pode estar em branco!");
        }
    }

    private function validarIdade() {
    if (!$this->idade) {
        throw new Exception("A idade não pode estar em branco!");
        }
    }

    private function validarLogradouro() {
        if (!$this->logradouro) {
            throw new Exception("O logradouro não pode estar em branco!");
        }
    }

    private function validarCep() {
        if (!$this->cep) {
            throw new Exception("O CEP não pode estar em branco!");
        }
    }

    private function validarBairro() {
        if (!$this->bairro) {
            throw new Exception("O bairro não pode estar em branco!");
        }
    }

    private function validarCidade() {
        if (!$this->cidade) {
            throw new Exception("A cidade não pode estar em branco!");
        }
    }

    private function validarEstado() {
        if (!$this->estado) {
            throw new Exception("O estado não pode estar em branco!");
        }
    }

    private function validarNumero() {
        if (!$this->numero) {
            throw new Exception("O número não pode estar em branco!");
        }
    }

    private function validarComplemento() {
        if (!$this->complemento) {
            throw new Exception("O complemento não pode estar em branco!");
        }
    }

    private function validarPontoReferencia() {
        if (!$this->pontoReferencia) {
            throw new Exception("O ponto de referência não pode estar em branco!");
        }
    }

    public function validarDados() {
        $this->validarNome();
        $this->validarIdade();
        $this->validarLogradouro();
        $this->validarCep();
        $this->validarBairro();
        $this->validarCidade();
        $this->validarEstado();
        $this->validarNumero();
        $this->validarComplemento();
        $this->validarPontoReferencia();
    }

    public function __toString() {

    if (!$this->validar()) {
        return "Erro nos dados da pessoa.<br>";
    }

    return
        "Nome: {$this->nome}<br>" .
        "Idade: {$this->idade}<br>" .
        "Logradouro: {$this->logradouro}<br>" .
        "CEP: {$this->cep}<br>" .
        "Bairro: {$this->bairro}<br>" .
        "Cidade: {$this->cidade}<br>" .
        "Estado: {$this->estado}<br>" .
        "Número: {$this->numero}<br>" .
        "Complemento: {$this->complemento}<br>" .
        "Ponto de Referência: {$this->pontoReferencia}<br>" .
        "CPF: {$this->CPF}<br>";
    }
}

$pessoa = new PessoaFisica();

$pessoa->nome = "Empresa X";
$pessoa->idade = 10;
$pessoa->logradouro = "Av. Central";
$pessoa->cep = "12345-000";
$pessoa->bairro = "Centro";
$pessoa->cidade = "São Paulo";
$pessoa->estado = "SP";
$pessoa->numero = "500";
$pessoa->complemento = "Sala 10";
$pessoa->pontoReferencia = "Próximo ao banco";
$pessoa->CPF = "123.456.789-09"; 

if ($pessoa->validar()) {
    echo $pessoa;
}
