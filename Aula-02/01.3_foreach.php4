<?php

# Formato tradicional
/*$conta1 = [
    'titular' => 'Fernando',
    'saldo' => '1000'
];
$conta2 = [
    'titular' => 'Maria',
    'saldo' => '10000'
];
$conta3 = [
    'titular' => 'Vanessa',
    'saldo' => '300'
];*/

## Por baixos dos panos o php vai colocar um idice para cada "$conta"

/*
 * $contasCorrentes = [
   0 => $conta1,
   0 => $conta2,
   0 => $conta3
];
 */
$contasCorrentes = [
   12345678910 => [
       'titular' => 'Fernando',
       'saldo' => '1000'
   ],
   12345678911 => [
       'titular' => 'Maria',
       'saldo' => '10000'
   ],
   12345678912 =>  [
       'titular' => 'Vanessa',
       'saldo' => '300'
   ]
];

foreach ($contasCorrentes as $indiceCpf => $conta){
    echo $indiceCpf . ' ' . $conta['titular'] . PHP_EOL;
}