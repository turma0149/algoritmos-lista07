<?php

//Declarar vetor/array e atribuir dados
$notas = [1, 2, 4, 7, 5, 3, 10, 4];

//Saída na tela um por um  
echo ($notas[6] . "<br>"); //mostrar nota 10
echo ($notas[2] . "<br>"); //mostrar nota 4 
echo ($notas[4] . "<br>"); //mostrar nota 5 

//Alterar valores via índice/posição
$notas[5] = 8;

//Mostrar o vetor inteiro
print_r($notas);

//Ideal para manipular dados 
//Percorrer o array/vetor inteiro
//$notas = [1,2,4,7,5,8,10,4];

echo ("<hr>");

for ($contador = 0; $contador < count($notas); $contador++) {
    echo ("posição: " . $contador . "- valor:" . $notas[$contador] . "<br>");
}
