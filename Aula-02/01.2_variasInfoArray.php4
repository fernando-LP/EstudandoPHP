<?php
# CONTAS CORRENTES


# => Exemplo de Array Associativo <= #

$conta1 = [
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
];

echo $conta1['titular'];
echo "\n";
## LISTAR TODOS OS TITULARES ##
$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i++){
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}