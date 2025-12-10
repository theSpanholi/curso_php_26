<?php

// /*Tipos Primitivos
// Int | Integer == 1, 2, 3...
// Float | Double 1.0, 2.0, 3.0...
// String | Char-Character "Oi", 'o'...
// */

// $texto = ""; // String vazia;

// //Tipos Compostos|Coleção de dados: Array | Vetor
// $numeros = array(); // array vazio
// $numeros = []; // array vazio



// $numeros = [10, 1, 12, 5.5, 52.99, "Infoserv"]; // Tam: 6
// //           0, 1,  2,   3,     4,          5,

// for($i = 0; $i < 6 ; $i++){
//     //echo $numeros[0];
//     echo $numeros[$i] . "<br>" ;
// }

// //Maneiras de ver o i == indice
// echo $numeros[0];
// print_r($numeros);
// echo"<br>";
// var_dump($numeros);

// echo "<h3>Implode</h3>";
// echo implode(", ",$numeros);

// echo "<h3>Atividade While</h3>";

// $i = 0;
// while($i < 6){
//     echo $numeros[$i] . "   ";
//     $i++;
// }

// echo "<h3>Atividade Do While</h3>";

// $i = 0; do {
//     echo $numeros[$i] . "   ";
//     $i++;
// } while ($i < 6);

// $contador=[];

// /* for($a = 0; $a <=10; $a++) {
// *    echo $contador[] = $a;
// *}
// */



// /**
// * Fazer o exercicio utilizando Vetores.  * Exercicio: Encontrar os 5 primeiros números primos.
// * Primos: 2, 3, 5, 7, 11
// * Salvar os numeros primos dentro de um array
// * Após ter encontrado o s5 primos, em um FOR exibir os mesmos(Primos)
// */

// echo "<h3>Atividade For</h3>";


// $contPrimos = 0;
// $numeroAvaliado = 3;
// $numerosPrimosAchados = [];

// for ($numeroAvaliado = 10; $contPrimos < 5; $numeroAvaliado++) { 
             
//         $antecessor = $numeroAvaliado - 1;
//         $ehPrimo= true;

//         for($divisor = 2; $divisor <= $antecessor; $divisor++){

//                 $restoDivisao = $numeroAvaliado % $divisor;
//                 $ehDivisaoExata = $restoDivisao == 0;

//                 if($ehDivisaoExata) {
//                         $ehPrimo = false;
//                         break;
//                 }
                
//         } // Fim FOR Dentro

//         if ($ehPrimo) {
//             $numerosPrimosAchados[] = $numeroAvaliado;
//             $contPrimos++;
//         }
// } // Fim FOR Fora

/**
 * Somar arrays:
 * $arrayInicio = [5, 10, 50];
 * $arrayFim = [10, 90, 30];
 * Resultado esperado:
 * $arraySoma[15, 100, 80];
 */


/**
 * Multiplicar arrays:
 * $arrayInicio = [5, 10, 8];
 * $arrayFim = [10, 100, 3];
 * Resultado esperado:
 * $arrayMultiplicado[50, 1000, 24];
 */

// $arrayInicio = [5, 10, 50];
// $arrayFim = [10, 90, 30];
// $arraySoma = [];

// echo "<h3>Tema Somar</h3>";

// for ($i = 0; $i < 3; $i++){
//     $arraySoma[$i] = $arrayInicio[$i] + $arrayFim[$i];
// }

// echo "<h3>Implode</h3>";
// echo implode(", ",$arraySoma);

// echo "<h3>Tema Multiplicação</h3>";

// $arrayInicio = [5, 10, 8];
// $arrayFim = [10, 100, 3];
// $arrayMultiplicacao = [];

// for ($i = 0; $i < 3; $i++){
//     $arrayMultiplicacao[$i] = $arrayInicio[$i] * $arrayFim[$i];
// }

// echo "<h3>Implode</h3>";
// echo implode(", ",$arrayMultiplicacao);

/**
 * Dada uma palavra informada pelo usuario,
 * verificar se a mesma forma um palíndromo.
 * 
 * ex: ana, subi no onibus, kaik, natan.
 * 
 * Dica: Um for dentro do outro.
 */



// for($i = 0; $i < $tamanho; $i++) {
    
//     $letraIndo = $palavra[$i];
//     $tamanhoVolta = $tamanho - 1;

//     if($i != 0){
//         $tamanhoVolta -= $i;
//     }

//     for($j = $tamanho - $tamanhoVolta ; $j >= 0; $j-- ) {
        
//         $letraVoltando = $palavra[$j];
//         $saoIguais = $letraIndo == $letraVoltando;
        
        
//         if ($saoIguais == false) {
//             $ehPalindromo = false;
//             break;
//         }
//     }

//     if ($i < $tamanho - 1) {
//         $ehPalindromo = true;
//     }
// }

echo "<h3>Palíndromo</h3>";

$palavra = "somos";
$tamanho = strlen($palavra);// 3
$palavraInvertida = "";

for($i = $tamanho; $i >= 0; $i--){
    $palavraInvertida .= $palavra[$i];
}

$ehPalindromo = $palavra === $palavraInvertida;

if ($ehPalindromo) {
    echo "A palavra $palavra é palindromo";
} else {
    echo "A palavra $palavra não é um palindromo";
}


/**
 * Contar quantas vogais existem em uma frase.
 * 
 * $vogais = ['a', 'e', 'i', 'o' ,'u'];
 * $vogalMinuscula = strtolower($palavra[$i]);
 * 
 * in_array();
 * 
 * $existeVogal = in_array($vogalMincuscula, $vogais);
 * 
 * Ex:
 * $palavra = "infoserv";
 * $palavra = "infoserv";
 * 
 * Saída esperada: 3 vogais;
 */


/**
 *Contar quantas vogais existem em uma frase ou palavra.
 *Totalizando a quantidade de cada uma, ou seja, quantos A, quantos E. 
*/
