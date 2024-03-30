<?php

#Function para isolar uma parte do codigo, e chamar ela em qualquer lugar depois
#No momento não utilizamos poteiro, por isso precisamos lembrar do return.
# Variaveis complexas - {$conta['titular']} lendo um array dentro da string " . "
# array $conta -> Informa que o valor permitido para esse parametro é um array
# float $valorSacar -> Informa que o valor permitido para esse parametro é float
# function ($parametros) : array -> Isso significa que a função toda vai retornar um array.
# include e utilizado para chamar arquivos não ecenssias para o código retorna warning
# require -> Ele obriga ter o arquivo correto, caso contrário retorna erro.
# require_once -> Ele só importa o arquivo, se o mesmo já não foi importado.

require_once "funcao.php";
require_once "funcao.php"; ## com o _once não gera erro quando chama duas vezes o mesmo arquivo

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

titularMaiusculo($contasCorrentes['123.456.789-10']);


foreach ($contasCorrentes as $indiceCpf => $item) {
    exibeMensagem(
        $indiceCpf . " " . $item['titular'] . ' ' . $item['saldo']
    );
}
