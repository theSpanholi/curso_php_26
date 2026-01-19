<?php

require_once "./PessoaAbstract.php";

class PessoaJuridica extends PessoaAbstract{
    public $CNPJ;

    public function __construct()
    {
        $this->resetarPessoa();
        $this->CNPJ = "";
    }

    public function validar(){
        $this->validarDados();

        if (!$this->validarCNPJ($this->CNPJ)) {
            echo "CNPJ inválido<br>";
            return false;
        }

        return true;
    }


    private function validarNome() {
        if (!$this->nome) {
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
            "CNPJ: {$this->CNPJ}<br>";
    }
}

$empresa = new PessoaJuridica();

$empresa->nome = "Empresa X";
    $empresa->idade = 10;
    $empresa->logradouro = "Av. Central";
    $empresa->cep = "12345-000";
    $empresa->bairro = "Centro";
    $empresa->cidade = "São Paulo";
    $empresa->estado = "SP";
    $empresa->numero = "500";
    $empresa->complemento = "Sala 10";
    $empresa->pontoReferencia = "Próximo ao banco";
    $empresa->CNPJ = "11.222.333/0001-81";

if ($empresa->validar()) {
    echo $empresa;
}
