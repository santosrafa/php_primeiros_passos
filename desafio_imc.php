<?php

$peso = 10;
$altura = 1.90;

$imc = $peso / $altura * $altura;

echo "Seu IMC é de $imc. Você está com o IMC ";

if($imc < 18.5){
    echo "abaixo do peso";
}elseif ($imc < 25){
    echo "dentro";
}else{
    echo "acima";
}

echo "do recomendado";

/* DESAFIO IMC */

