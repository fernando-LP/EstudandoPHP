<?php

ECHO "TIPOS PRIMITIVOS" . PHP_EOL . PHP_EOL;
//Como descobrir o tipo da variavel?

echo "---------- VARIAVEL INTERIRA ----------" . PHP_EOL;

$idade = 22;
echo "Variavel Idade = 22 : " . gettype($idade) . PHP_EOL;


// No php chamamos um numero de pontoFlutuante quando tem valor depois da virgula
// Porem nao conseguimos colocar virgula, apenas o ponto.
// PHP entende isso como DOUBLE / FLOAT.
//$salario = 1000,30.;

echo "---------- VARIAVEL DOUBLE 1000.30 ----------" . PHP_EOL;
$salario = 1000.30;

echo "Variavel salario = 1000.30: " . gettype($salario) . PHP_EOL;


// ------------ DIVISAO --------------- //

echo "---------- VARIAVEL DIVISAO 10 / 3 ----------" . PHP_EOL;
$divisao = 10 / 3;
echo "Variavel divisao 10/3: " . gettype($divisao) . PHP_EOL;
echo $divisao . PHP_EOL;