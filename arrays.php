<?php

/*Tipos Primitivos
Int | Integer == 1, 2, 3...
Float | Double 1.0, 2.0, 3.0...
String | Char-Character "Oi", 'o'...
*/

$texto = ""; // String vazia;

//Tipos Compostos|Coleção de dados: Array | Vetor
$numeros = array(); // array vazio
$numeros = []; // array vazio



$numeros = [10, 1, 12, 5.5, 52.99, "Infoserv"]; // Tam: 6
//           0, 1,  2,   3,     4,          5,

for($i = 0; $i < 6 ; $i++){
    //echo $numeros[0];
    echo $numeros[$i] . "<br>" ;
}

//Maneiras de ver o i == indice
echo $numeros[0];
print_r($numeros);
echo"<br>";
var_dump($numeros);

echo "<h3>Implode</h3>";
echo implode(", ",$numeros);

echo "<h3>Atividade While</h3>";

$i = 0;
while($i < 6){
    echo $numeros[$i] . "   ";
    $i++;
}

echo "<h3>Atividade Do While</h3>";

$i = 0; do {
    echo $numeros[$i] . "   ";
    $i++;
} while ($i < 6);

$contador=[];

/* for($a = 0; $a <=10; $a++) {
*    echo $contador[] = $a;
*}
*/



/**
* Fazer o exercicio utilizando Vetores.  * Exercicio: Encontrar os 5 primeiros números primos.
* Primos: 2, 3, 5, 7, 11
* Salvar os numeros primos dentro de um array
* Após ter encontrado o s5 primos, em um FOR exibir os mesmos(Primos)
*/

echo "<h3>Atividade For</h3>";


$contPrimos = 0;
$numeroAvaliado = 3;
$numerosPrimosAchados = [];

for ($numeroAvaliado = 10; $contPrimos < 5; $numeroAvaliado++) { 
             
        $antecessor = $numeroAvaliado - 1;
        $ehPrimo= true;

        for($divisor = 2; $divisor <= $antecessor; $divisor++){

                $restoDivisao = $numeroAvaliado % $divisor;
                $ehDivisaoExata = $restoDivisao == 0;

                if($ehDivisaoExata) {
                        $ehPrimo = false;
                        break;
                }
                
        } // Fim FOR Dentro

        if ($ehPrimo) {
            $numerosPrimosAchados[] = $numeroAvaliado;
            $contPrimos++;
        }

} // Fim FOR Fora

for ($i = 0; $i < 5 ; $i++) {
            echo "    ";
            echo $numerosPrimosAchados[$i];
        }