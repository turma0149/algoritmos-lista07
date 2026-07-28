<?php

//Funções que eu criei

//1-Função para formatar estilo moeda BR
function formatarMoedaBr(float $valor){
    $valorFormatado = number_format($valor,2,",",".");
    return "R$ $valorFormatado";
}

//2-Função para realizar cálculos de imc 
function calcularImc(float $peso, float $altura){
    $resultado = $peso/($altura*$altura);
    $grauObesidade = 0;

    if($resultado<18.5){
        $grauObesidade = 0;
    } else if ($resultado<24.9) {
        $grauObesidade = 0;
    } else if ($resultado<29.9) {
        $grauObesidade = 1;
    } else if ($resultado<34.9) {
        $grauObesidade = 1; 
    }  else if ($resultado<39.9) {
        $grauObesidade = 2;
    } else {
        $grauObesidade = 3;
    }

    return $grauObesidade;
}

//3-Função para quebrar linha 
function quebrarLinha(){
    echo("<br> <hr>");
}


//Chamada das funções que eu criei
$resultado = 1250.55;
echo (formatarMoedaBr($resultado));

quebrarLinha();

echo(calcularImc(60,1.70));
quebrarLinha();
echo(calcularImc(79,1.70));
quebrarLinha();
echo(calcularImc(110,1.70));
quebrarLinha();
echo(calcularImc(150,1.70));