<?php

#Function para isolar uma parte do codigo, e chamar ela em qualquer lugar depois
#No momento não utilizamos poteiro, por isso precisamos lembrar do return.
# Variaveis complexas - {$conta['titular']} lendo um array dentro da string " . "
# array $conta -> Informa que o valor permitido para esse parametro é um array
# float $valorSacar -> Informa que o valor permitido para esse parametro é float
# function ($parametros) : array -> Isso significa que a função toda vai retornar um array.

function exibeMensagem($mensagem)
{
    echo $mensagem . PHP_EOL;
}

function sacar( array $conta, float $valorSacar) : array
{
    if($valorSacar > $conta['saldo']){
        exibeMensagem( "{$conta['titular']} Não possui saldo suficiente!");
    } else {
        $conta['saldo'] -= $valorSacar;
    }
    return $conta;
}

function despositar(array $conta, float $valor) : array
{
    if($valor < 0){
        exibeMensagem("{$conta['titular']} Impossivel inserir valor negativo!");
    } else {
        $conta['saldo'] += $valor;
    }
    return $conta; # Para retornar o valor da conta para variavel 'pai'
}
$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Fernando',
        'saldo' => '1000'
    ],
    '123.456.789-11' => [
        'titular' => 'Maria',
        'saldo' => '10000'
    ],
    '123.456.789-12' =>  [
        'titular' => 'Vanessa',
        'saldo' => '300'
    ]
];

$contasCorrentes['123.456.789-10'] = despositar(
    $contasCorrentes['123.456.789-10'],
    -300
);

$contasCorrentes['123.456.789-11'] = sacar(
    $contasCorrentes['123.456.789-11'],
    30000
);


foreach ($contasCorrentes as $indiceCpf => $item) {
    exibeMensagem(
        $indiceCpf . " " . $item['titular'] . ' ' . $item['saldo']
    );
}
