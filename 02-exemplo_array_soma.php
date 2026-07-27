<?php

//Crie um array de números inteiros e some

$numeros = [1,3,4,10,2,3,4,5,6,8,9,10];

$somaNumero = 0;

for($i=0;$i<count($numeros);$i++){
    echo ("i: $i - $numeros[$i] <br>");
    $somaNumero += $numeros[$i];
}

echo("Soma dos números: $somaNumero");



