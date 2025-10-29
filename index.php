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

echo "<h1>Tabuada do 5</h1>";

echo "5 x 1 = " . (5 * 1) . "<br>";
echo "5 x 2 = " . (5 * 2) . "<br>";
echo "5 x 3 = " . (5 * 3) . "<br>";
echo "5 x 4 = " . (5 * 4) . "<br>";
echo "5 x 5 = " . (5 * 5) . "<br>";
echo "5 x 6 = " . (5 * 6) . "<br>";
echo "5 x 7 = " . (5 * 7) . "<br>";
echo "5 x 8 = " . (5 * 8) . "<br>";
echo "5 x 9 = " . (5 * 9) . "<br>";
echo "5 x 10 = " . (5 * 10) . "<br>";

echo "<h1>Tabuada do 6</h1>";

echo "6 x 1 = " . (6 * 1) . "<br>";
echo "6 x 2 = " . (6 * 2) . "<br>";
echo "6 x 3 = " . (6 * 3) . "<br>";
echo "6 x 4 = " . (6 * 4) . "<br>";
echo "6 x 5 = " . (6 * 5) . "<br>";
echo "6 x 6 = " . (6 * 6) . "<br>";
echo "6 x 7 = " . (6 * 7) . "<br>";
echo "6 x 8 = " . (6 * 8) . "<br>";
echo "6 x 9 = " . (6 * 9) . "<br>";
echo "6 x 10 = " . (6 * 10) . "<br>";

echo "<h1>Média Aritmética</h1>";

$number1 = 5 ;
$number2 = 8 ;
$number3 = 10 ;

$mediaAritmetica = ($number1 + $number2 + $number3 ) / 3 ;
echo "A Média Artimética é de  " . $mediaAritmetica . "<br>";

echo "<h1>Média Ponderada</h1>";

$number4 = 15 ;
$number5 = 12 ;
$number6 = 20 ;
$mediaPonderada = (($number4 * $number1) + ($number5 * $number2) + ( $number6 * $number3)) / ($number4 + $number5 + $number6) ;
echo "Média Ponderada : " . $mediaPonderada . "<br>" ;

echo "<h1>Média Hârmonica</h1>" ;
$mediaHarmonica = 3 / (( 1 / $number1) + ( 1 / $number2) + ( 1 / $number3 )) ;
echo "Média Harmômica: " . $mediaHarmonica . "<br>" ;

//Calcular o volume de uma esfera com raio de 5cm
//Dicas: Elevar ao cubo -> ** 3 = 8. PI = 3.14
// FORMULA: 4/3 * PI * R ao cubo
echo "<h1>Como calcular o volume de uma esfera?</h1>" ;
$raio = 5;
CONST PI = 3.14;
$raioAoCubo = $raio **3;
$fracao = 4/3;
$volumeEsfera = $raioAoCubo * PI * $fracao;
echo "O Volume da esfera é: $volumeEsfera<br>";

//  sqrt (CALCULA A RAIZ QUADRADA DE UM NÚMERO, OU VARIAVEL)

// Conveter graus Fahrenheit para Celsius. 95ºF -> ? (35º)
echo "<h1>Fahrenheit para Celsius</h1>" ;

$fh = 95;
$celsius = ($fh - 32) / 1.8 ;

echo "<br>A Conversão de $fh Farenheit, é de $celsius Celsius<br>" ;

// Converter graus Celsius para Kelvin. 35ºC -> ?ºC.
echo "<h1>Celsius para Kelvin</h1>" ;

$kelvin = $celsius + 273.15;

echo "<br>A conversão de $celsius Celsius, é de $kelvin Kelvin<br>" ;

//Converter graus Kelvin para Celsius. ?ºK -> 35ºC.
echo "<h1>Kelvin para Celsius</h1>" ;

$celsius = $kelvin - 273.15;

echo "<br>A conversão de $kelvin Kelvin, é de $celsius Celsius<br>" ;

/*
$soma = 2/
$soma += 5; // 7

1 == 1 igual
2 !=  3 diferente de igual a ( <> )
1 < 2 menor que
3 > 2 maior que
0 <= 1 menor ou igual a
6 >= 6 maior ou igual a

7 >= 6
$valor1 >= $valor2 // V

E // &&
$tenhoDinheiro && $tenhoVontadeTomarCafe

OU // ||
$tenhoDinheiro || $ganheiDinheiro

TABELA VERDADE
V V == V
V F == F
F V == F
F F == F(v)
*/

$tenhoDinheiro = true;
$tenhoVontadeTomarCafe = true;


if ($tenhoDinheiro && $tenhoVontadeTomarCafe) {
    echo "Vou tomar café<br>";
}  else if ($tenhoDinheiro && !$tenhoVontadeTomarCafe) {
        echo"Vou comprar chocolate<br>";
}  else {
        echo "nao tenho vontade de nada<br>";
}