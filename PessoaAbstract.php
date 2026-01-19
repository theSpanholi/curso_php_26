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

        $cpf = preg_replace('/\D/', '', $cpf);

        if (strlen($cpf) != 11) {
            return false;
        }

        if (preg_match('/(\d)\1{10}/', $cpf)) {
            return false;
        }

        for ($t = 9; $t < 11; $t++) {
            $soma = 0;
            for ($c = 0; $c < $t; $c++) {
                $soma += $cpf[$c] * (($t + 1) - $c);
            }

            $digito = ((10 * $soma) % 11) % 10;

            if ($cpf[$c] != $digito) {
                return false;
            }
        }
        
        return true;
    }

    public function validarCNPJ($cnpj) {

        $cnpj = preg_replace('/\D/', '', $cnpj);

        if (strlen($cnpj) != 14) {
            return false;
        }

        if (preg_match('/(\d)\1{13}/', $cnpj)) {
            return false;
        }

        $pesos1 = [5,4,3,2,9,8,7,6,5,4,3,2];
        $pesos2 = [6,5,4,3,2,9,8,7,6,5,4,3,2];

        for ($t = 0; $t < 2; $t++) {
            $soma = 0;
            $pesos = ($t == 0) ? $pesos1 : $pesos2;

            for ($i = 0; $i < count($pesos); $i++) {
                $soma += $cnpj[$i] * $pesos[$i];
            }

            $digito = $soma % 11;
            $digito = ($digito < 2) ? 0 : 11 - $digito;

            if ($cnpj[12 + $t] != $digito) {
                return false;
            }
        }
    return true;
    }
}
