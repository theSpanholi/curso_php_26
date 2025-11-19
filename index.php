<?php

// $aviao; // null || undefined || d1d54d55555d4

// /**
//  * string 'texto qualquer' || 'A' || "A"
//  * char || character 'A'
//  * in || integer 23
//  * float 23.8 "valor real pequeno"
//  * double 23.8 "valor real grande"
//  * decimal 23.8
//  */

// // SOMA

// echo "<h1>SOMA</h1>";

// $aviao = "Boeing 1747";


// $valor2 = 10;
// $valor1 = 15;
// $soma = $valor1 + $valor2; //10 + 15 -> 25
// // mesma coisa
// $soma = $soma + 3; // 28
// $soma +=3; // 31

// $salario = 1000;
// $valorSoma = $soma + $salario;

// echo "Soma é: " . $valorSoma;
// echo "<br>";

// // SUBTRAÇÃO

// echo "<h1>SUBTRAÇÃO</h1>";

// $salario = 1200;
// $mercado = 200;
// $agua = 150;
// $luz = 400;

// $despesas = $luz + $mercado + $agua;

// $valorSubtracao = $salario - $despesas;
// echo "Subtração é: " . $valorSubtracao;

// //MULTIPLICAÇÃO

// echo "<h1>MULTIPLICAÇÃO</h1>";


// $arvores = 10 ;
// $frutos = 30 ;

// echo "Temos $arvores  Àrvores frutiferas, cada uma dessas àrvores nós dão $frutos frutos." ;
// echo "<br>";

// $colheita = $arvores * $frutos;

// echo "O Total de frutos é de: " . $colheita;

// //DIVISÃO

// echo "<h1>DIVISÃO</h1>";

// $pedacos = 50 ;
// $pessoas = 10 ;

// echo "Em nossa festa temos $pessoas, nosso bola tem $pedacos .";
// echo "<br>";

// $cadaUm = $pedacos / $pessoas ;
// echo "Cada pessoa irá receber " . $cadaUm . " pedaços de bolo!" ;

// //MÓDULO

// echo "<h1>MODULO</h1>";

// $valor1 = 50;
// $valor2 = 11;
// $restoDivisao = $valor1 % $valor2 ;
// echo "O resto da divisão é de " . $restoDivisao;

// //EXPLICAÇÃO DO MÓDULO
// // 50 / 11 = 6 o módulo é resto então módulo igual a 6 !

// /**
//  * Exercicio 1;
//  * Fazer a tabuada do 5, 6.
//  *
//  * Exercicio 2;
//  * calcular as médias artimeticas, Ponderada e Harmonica.
//  */

// echo "<h1>Tabuada do 5</h1>";

// echo "5 x 1 = " . (5 * 1) . "<br>";
// echo "5 x 2 = " . (5 * 2) . "<br>";
// echo "5 x 3 = " . (5 * 3) . "<br>";
// echo "5 x 4 = " . (5 * 4) . "<br>";
// echo "5 x 5 = " . (5 * 5) . "<br>";
// echo "5 x 6 = " . (5 * 6) . "<br>";
// echo "5 x 7 = " . (5 * 7) . "<br>";
// echo "5 x 8 = " . (5 * 8) . "<br>";
// echo "5 x 9 = " . (5 * 9) . "<br>";
// echo "5 x 10 = " . (5 * 10) . "<br>";

// echo "<h1>Tabuada do 6</h1>";

// echo "6 x 1 = " . (6 * 1) . "<br>";
// echo "6 x 2 = " . (6 * 2) . "<br>";
// echo "6 x 3 = " . (6 * 3) . "<br>";
// echo "6 x 4 = " . (6 * 4) . "<br>";
// echo "6 x 5 = " . (6 * 5) . "<br>";
// echo "6 x 6 = " . (6 * 6) . "<br>";
// echo "6 x 7 = " . (6 * 7) . "<br>";
// echo "6 x 8 = " . (6 * 8) . "<br>";
// echo "6 x 9 = " . (6 * 9) . "<br>";
// echo "6 x 10 = " . (6 * 10) . "<br>";

// echo "<h1>Média Aritmética</h1>";

// $number1 = 5 ;
// $number2 = 8 ;
// $number3 = 10 ;

// $mediaAritmetica = ($number1 + $number2 + $number3 ) / 3 ;
// echo "A Média Artimética é de  " . $mediaAritmetica . "<br>";

// echo "<h1>Média Ponderada</h1>";

// $number4 = 15 ;
// $number5 = 12 ;
// $number6 = 20 ;
// $mediaPonderada = (($number4 * $number1) + ($number5 * $number2) + ( $number6 * $number3)) / ($number4 + $number5 + $number6) ;
// echo "Média Ponderada : " . $mediaPonderada . "<br>" ;

// echo "<h1>Média Hârmonica</h1>" ;
// $mediaHarmonica = 3 / (( 1 / $number1) + ( 1 / $number2) + ( 1 / $number3 )) ;
// echo "Média Harmômica: " . $mediaHarmonica . "<br>" ;

// //Calcular o volume de uma esfera com raio de 5cm
// //Dicas: Elevar ao cubo -> ** 3 = 8. PI = 3.14
// // FORMULA: 4/3 * PI * R ao cubo
// echo "<h1>Como calcular o volume de uma esfera?</h1>" ;
// $raio = 5;
// CONST PI = 3.14;
// $raioAoCubo = $raio **3;
// $fracao = 4/3;
// $volumeEsfera = $raioAoCubo * PI * $fracao;
// echo "O Volume da esfera é: $volumeEsfera<br>";

// //  sqrt (CALCULA A RAIZ QUADRADA DE UM NÚMERO, OU VARIAVEL)

// // Conveter graus Fahrenheit para Celsius. 95ºF -> ? (35º)
// echo "<h1>Fahrenheit para Celsius</h1>" ;

// $fh = 95;
// $celsius = ($fh - 32) / 1.8 ;

// echo "<br>A Conversão de $fh Farenheit, é de $celsius Celsius<br>" ;

// // Converter graus Celsius para Kelvin. 35ºC -> ?ºC.
// echo "<h1>Celsius para Kelvin</h1>" ;

// $kelvin = $celsius + 273.15;

// echo "<br>A conversão de $celsius Celsius, é de $kelvin Kelvin<br>" ;

// //Converter graus Kelvin para Celsius. ?ºK -> 35ºC.
// echo "<h1>Kelvin para Celsius</h1>" ;

// $celsius = $kelvin - 273.15;

// echo "<br>A conversão de $kelvin Kelvin, é de $celsius Celsius<br>" ;

// /*
// $soma = 2/
// $soma += 5; // 7

// 1 == 1 igual
// 2 !=  3 diferente de igual a ( <> )
// 1 < 2 menor que
// 3 > 2 maior que
// 0 <= 1 menor ou igual a
// 6 >= 6 maior ou igual a

// 7 >= 6
// $valor1 >= $valor2 // V

// E // &&
// $tenhoDinheiro && $tenhoVontadeTomarCafe

// OU // ||
// $tenhoDinheiro || $ganheiDinheiro

// TABELA VERDADE
// V V == V
// V F == F
// F V == F
// F F == F(v)
// */

// echo "<h1>Teste IF ELSE, café</h1>";

// $tenhoDinheiro = true;
// $tenhoVontadeTomarCafe = true;


// if ($tenhoDinheiro && $tenhoVontadeTomarCafe) {
//     echo "Vou tomar café<br>";
// }  else if ($tenhoDinheiro && !$tenhoVontadeTomarCafe) {
//         echo"Vou comprar chocolate<br>";
// }  else {
//         echo "nao tenho vontade de nada<br>";
// }

// /*

// Simular o funcionamento de uma calculadora
// utilizar if, else if, else.
// Operadores: + - * /

// */

// echo "<h1> Calculadoras </h1>";

// echo "<h3> Simulação de Calculadora, IF ELSE</h3>";

// //Dados da calculadora
// $operador = "+";
// $numero1 = 8;
// $numero2 = 6;



// if ( $numero1 < $numero2 ) {
//         $valorTemporario = $numero1;
//         $numero1 = $numero2;
//         $numero2 = $valorTemporario;
// }
// else if ( $operador == "+" ) {
//         $resultado = $numero1 + $numero2;
//         echo "O valor da sua soma é de: $resultado " ;
// } 
// else if ( $operador == "-" ) {
//         $resultado = $numero1 - $numero2;
//         echo "O valor da sua subtração é de: $resultado " ;
// }
// else if ( $operador == "*") {
//         $resultado = $numero1 * $numero2;
//         echo "O valor da sua multiplicação é de: $resultado " ;
// }
// else if ( $operador == "/") {
//         $resultado = $numero1 / $numero2;
//         echo "O valor da sua divisão é de: $resultado " ;
// }else{
//         echo "Desculpe não foi possível resolver o seu problema!" ;
// }

// //Dados da calculadora SWITCH CASE

// echo "<h3>Simulador de Calculadora, SWITCH CASE</h3>";

// $operador = "+";
// $numero1 = 8;
// $numero2 = 6;

// switch($operador) {
//         case "+":
//                 $resultado = $numero1 + $numero2;
//                 echo "O valor da sua soma é de: $resultado " ;
//                 break;
//         case "-":
//                 $resultado = $numero1 - $numero2;
//                 echo "O valor da sua subtração é de: $resultado " ;
//                 break;
//         case "*":
//                 $resultado = $numero1 * $numero2;
//                 echo "O valor da sua multiplicação é de: $resultado " ;
//                 break;
//         case "/":
//                 $resultado = $numero1 / $numero2;
//                 echo "O valor da sua divisão é de: $resultado " ;
//                 break;
//         default:
//                 echo "O operador informado não é valido!";
//                 break;
// }


// //Atividade 8, Página 15

// echo "<h1>MÉDIAS, IF ELSE</h1>";

// echo "<h3>Média de Notas, IF ELSE</h3>";

// $nota1 = 5;
// $nota2 = 0;
// $nota3 = 4;

// $mediaNota = ($nota1 + $nota2 + $nota3) / 3;

// if ($mediaNota >= 6) {
//         echo "Parabéns por passar de ano! A sua nota foi de: $mediaNota";
// }

// else {
//         echo "Você reprovou de ano, sua média foi abaixo de 6! Sua nota foi de: $mediaNota";
// }

// echo "<h3>Média Ponderada, IF ELSE</h3>";

// $valor1 = 10 ;
// $valor2 = 20 ;
// $valor3 = 30 ;
// $valor4 = 15 ;
// $valor5 = 12 ;
// $valor6 = 20 ;
// $mediaPonderada = (($valor4 * $valor1) + ($valor5 * $valor2) + ( $valor6 * $valor3)) / ($valor4 + $valor5 + $valor6) ;

// if ($mediaPonderada >= 50) {
//         echo "Parabéns! Você foi aprovado no curso! Sua pontução foi de: $mediaPonderada";
// }
//         else {
//                 echo "Que pena você não atingiu a pontuação suficente! Sua pontução foi de: $mediaPonderada ";
//         }

// echo "<h3>Média Hârmonica, IF ELSE</h3>" ;
// $mediaHarmonica = 3 / (( 1 / $valor1) + ( 1 / $valor2) + ( 1 / $valor3 )) ;

// if ($mediaHarmonica >= 15) {
//         echo "Parabéns! Você foi passou no concurso! Sua pontução foi de: $mediaHarmonica";
// }
//         else {
//                 echo "Que pena você não atingiu a pontuação suficente! Sua pontução foi de: $mediaHarmonica ";
//         }


// //Atividade 9, Página 16

// echo"<h1>Verificação de idade</h1>";

// $idade = 18;

// if ($idade >= 18 ) {
//         echo "O _______ , está aprovado, sua idade é de $idade";
// }
// else  { 
//         echo "O ________ , não está aprovado sua idade, $idade, é menor do que a permitida ";
// }


// //PAGINA 15, EX 5

//  echo"<h1>Verificador de número par ou ímpar</h1>";
//  $num =2;
//  $restoDivisao = $num % 2;

//  if($restoDivisao == 0){
//         echo "O $num é par";
// } else {
//         echo "O $num é ímpar";
// }

// echo"<h1>LOOPS</h1>";
// // $contar = $a +1; || $contar +=1; || $contar++;

// echo"<h2>Calculadora LOOP</h2>";

// $numero = 6;
// for ($contar = 1;$contar <= 10; $contar++) {
//         echo"<br>";
//         echo"$numero X $contar = " . $numero * $contar;
// }

// /*      
//         --PULA O NÚMERO 5, continue = pular
//         if($contar == 5) {
//               continue;   =     X
//         }
         
//         --IDENTIFICA SE O NÚMERO É PAR OU ÍMPAR
//         $restoDivisao = $contar % 2;
//         $ehDivisaoExata = $restoDivisao == 0;

//         if($ehDivisaoExata){
//                 echo "O $contar é par";
//         } else {
//                 echo "O $contar é ímpar";
//         }
//         --PARA A CONTAGEM NO 5 LOOP, BREAK = PARAR
//         if ($contar == 5) {
//                 break
//         }
// }
// */

// //Exibir os numeros pares de 1 até 50;

// echo"<h2>Sequênia de número par</h2>";

// for ($contadorPar = 0; $contadorPar <=50; $contadorPar = $contadorPar + 2){
//         echo"<br>";
//         echo"Sequência de número par: $contadorPar";
// }

// //Exibir o os numeros em ordem Decrescente(Maior para Menor - DESC) de 10 a 0

// echo"<h2>Ordem Decrescente</h2>";

// for ($contadorDecrescente = 10; $contadorDecrescente >= 0; $contadorDecrescente-- ) {
//         echo"<br>";
//         echo"Exibição de números em ordem descrescente: $contadorDecrescente";
// }

// //Calcular o fatorial de um numero. EX: calcular o fatorial de 5 = 120.

// echo"<h2>Valor Fatorial: Looping </h2>";

// $numeroFatorial= 6;
// $antecessor = $numeroFatorial -1;

// for ($contadorFatorial = $antecessor; $contadorFatorial >= 1; $contadorFatorial-- ) {
//         echo"<br>";
//         echo"Exibição dos valores fatoriais : $numeroFatorial x $contadorFatorial = " . $numeroFatorial *= $contadorFatorial; 
// }

// //  1  001
// // -1  1001 

// echo"<h2>Valor Fatorial: While</h2>";

// $numeroFatorial= 6;
// $antecessor = $numeroFatorial -1;
// $contadorFatorial = $antecessor;

// while ($contadorFatorial >= 1){
//         echo"<br>";
//         echo"Exibição dos valores fatoriais : $numeroFatorial x $contadorFatorial = " . $numeroFatorial *= $contadorFatorial;

//         $contadorFatorial--;
// }

// // TEMA DE CASA, FAZER AS MESMAS ATIVIDADE UTILIZANDO O WHILE

// echo "<h1>Tema de Casa TROCANDO o FOR por WHILE</h1>";

// echo"<h2>Calculadora While</h2>";

// $numeroTabuada = 5;
// $numeroSeletor = 1;

// while ($numeroSeletor <= 10){
//         echo "<br>";
//         echo "$numeroSeletor x $numeroTabuada :" . $numeroSeletor * $numeroTabuada;

//         $numeroSeletor++;
// }

// $contadorDePares = 0;

// while($contadorDePares <=50){
//         echo "<br>";
//         echo "A sequência de números pares é de : $contadorDePares";

//         $contadorDePares+= 2;
// }

// echo "<h2>Contador Decrescente WHILE</h2>";

// $contadorDecrescente = 10;

// while ($contadorDecrescente >= 0 ){
//         echo"<br>";
//         echo "A sequência decrescente é de: $contadorDecrescente";

//         $contadorDecrescente--;
// }

/**
 * Fazer o mesmo exercicio utilizando FOR e WHILE.
 * Exercicio: Encontrar os 5 primeiros números primos.
 * Primos: 2, 3, 5, 7, 11
 */

echo "<h1>Números Primos FOR</h1>";

$numeroAvaliado = 7;
$antecessor = $numeroAvaliado - 1;
$contPrimos = 0;

for ($divisor = 2; $divisor <= $antecessor; $divisor++) {
        
        if($contPrimos == 5) {
                break;
        }
        
        $restoDivisao = $numeroAvaliado % $divisor;
        $ehDivisaoExata = $restoDivisao == 0;

        if($ehDivisaoExata) {
                $numeroAvaliado++;
                $antecessor = $numeroAvaliado -1;
                continue;
        }

        if($divisor == $antecessor) {
                echo "<br>";
                echo "O Número $numeroAvaliado é primo";
                $numeroAvaliado++;
                $antecessor = $numeroAvaliado - 1;
                $contPrimos++;
                $divisor = 1;
        }

}
