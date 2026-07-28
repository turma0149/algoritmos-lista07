<?php

$nome = "bacon";
$valorProduto = 3500.5; 

echo("O valor do produto: " . $nome . " é R$ " . 
    number_format($valorProduto,2,",","."));
