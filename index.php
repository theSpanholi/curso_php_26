<?php 

$aviao; // null || undefined || d1d54d55555d4

/**
 * string 'texto qualquer' || 'A' || "A"
 * char || character 'A'
 * in || integer 23
 * float 23.8 "valor real pequeno"
 * double 23.8 "valor real grande"
 * decimal 23.8
 */

// SOMA

echo "<h1>SOMA</h1>";

$aviao = "Boeing747";
$valor1 = 10;
$valor2 = 15;
$soma = $valor1 + $valor2; //10 + 15 -> 25
// mesma coisa
$soma = $soma + 3; // 28
$soma +=3; // 31

$salario = 1000;
$valorSoma = $soma + $salario;

echo "Soma é: " . $valorSoma;
echo "<br>";

// SUBTRAÇÃO

echo "<h1>SUBTRAÇÃO</h1>";

$salario = 1200;
$mercado = 200;
$agua = 150;
$luz = 400;

$despesas = $luz + $mercado + $agua;

$valorSubtracao = $salario - $despesas;
echo "Subtração é: " . $valorSubtracao;

//MULTIPLICAÇÃO

echo "<h1>MULTIPLICAÇÃO</h1>";


$arvores = 10 ; 
$frutos = 30 ;

echo "Temos $arvores  Àrvores frutiferas, cada uma dessas àrvores nós dão $frutos frutos." ;
echo "<br>";

$colheita = $arvores * $frutos;

echo "O Total de frutos é de: " . $colheita;

//DIVISÃO

echo "<h1>DIVISÃO</h1>";

$pedacos = 50 ;
$pessoas = 10 ;

echo "Em nossa festa temos $pessoas, nosso bola tem $pedacos .";
echo "<br>";

$cadaUm = $pedacos / $pessoas ;
echo "Cada pessoa irá receber " . $cadaUm . " pedaços de bolo!" ;

//MÓDULO

echo "<h1>MODULO</h1>";

$valor1 = 50; 
$valor2 = 11;
$restoDivisao = $valor1 % $valor2 ;
echo "O resto da divisão é de " . $restoDivisao;

//EXPLICAÇÃO DO MÓDULO
// 50 / 11 = 6 o módulo é resto então módulo igual a 6 !

/**
 * Exercicio 1;
 * Fazer a tabuada do 5, 6.
 * 
 * Exercicio 2;
 * calcular as médias artimeticas, Ponderada e Harmonica.
 */

