<?php

// $nome = "Bruno";
// $idade = "18";
// $texto = "infoserv";

// function imprimeTexto($texto, $nome = "", $idade = 0){
//     echo $texto;
//     echo "<br>";
//     echo $nome;
//     echo "<br>";
//     echo $idade;
// }

// imprimeTexto($texto, $nome, $idade);

// // -> DTO Data Transfer Object
// function imprimeTexto22($texto){
//     return $texto;
// }

// $retorno = imprimeTexto22("aviao22"); // ou echo imprimeTexto22("aviao22");

// echo"<br>";
// echo $retorno;

echo "<h3>Calcular Segundos</h3>";

function calcularSegundosEmHoras($resultadoSegundos){
    $horas = 2;
    $minutos = 30;

    $minutosParaSegundos = $minutos * 60;

    $horasParaMinutos = $horas * 60;
    $horasSegundos = $horasParaMinutos * 60;

    $resultadoSegundos = $horasSegundos + $minutosParaSegundos;

    echo $resultadoSegundos;
}
calcularSegundosEmHoras($resultadoSegundos);

echo "<h3>IMC</h3>";

$peso = 70;
$altura = 1.88;
$imc = round( $peso / ($altura ** 2), 2);

function calcularImc($imc){
    $peso = 70;
    $altura = 1.88;

    $imc = round( $peso / ($altura ** 2), 2);

    echo $imc;
};

calcularImc($imc);

echo "<h3>Calculadora</h3>";

function verificaOperador($operador) {
    $operadoresValidos = ["+", "-", "/", "*"];

    if(in_array($operador, $operadoresValidos)){
        return true;
    }

    return false;
}

function calculadora($valor1, $valor2, $operador){

    if(!verificaOperador($operador)){
        return "Operador Válido";
    }

    switch($operador){
        case '+';
            return $valor1 + $valor2;

        case '-';
            return $valor1 - $valor2;

        case '*';
            return $valor1 * $valor2;

        case '/':
            if ($valor2 == 0) {
                return "Erro: divisão por zero";
            }
            return $valor1 / $valor2;
    }
}

echo calculadora(8,2,'*');

echo "<h2>Tema das Férias</h2>";

function calcularTempoDoJogo($hora,$minuto) {
    $minuto += 90;

    $hora += intdiv($minuto, 60); // intdiv ?? É divisão inteira, Ela ignora os decimais
    $minuto = $minuto % 60;

     if ($hora >= 24) {
        $hora -= 24;
     }

    return sprintf('%02d:%02d:00', $hora, $minuto);
}

echo calcularTempoDoJogo(23, 45);

echo "<h2>Tema de Casa: Com Acréscimos</h2>";

function terminoPartidaComAcrescimo($hora, $minuto, $acrescimos) {

    // soma 90 minutos + acréscimos
    $minuto += 90 + $acrescimos;

    $hora += intdiv($minuto, 60);
    $minuto = $minuto % 60;

    if ($hora >= 24) {
        $hora -= 24;
    }

    return sprintf('%02d:%02d:00', $hora, $minuto);
}

echo terminoPartidaComAcrescimo(23, 45, 5);
