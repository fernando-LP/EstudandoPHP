<?php

/*
 * Calcular IMC e informar se esta baixo ou alto.
 */

$peso = 80;
$altura = 1.79;

$imc = $peso / $altura**2;

if ($imc <= 16.9){
    echo "Muito abaixo do peso";
}elseif ($imc >= 17 and $imc <= 18.4){
    echo "Seu IMC é $imc. Abaixo de peso";
}elseif($imc >= 18.5 and $imc <= 24.9){
    echo "Seu IMC é $imc. Peso Normal";
}elseif($imc >= 25 and $imc <= 29.9){
    echo "Seu IMC é $imc. Acima do peso";
}