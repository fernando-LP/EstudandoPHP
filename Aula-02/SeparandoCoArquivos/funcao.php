<?php
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

# Estamos utilizando uma variavel por referencia, ou seja, não é uma copia da é a conta que estamos usando, ao utilizar o &$conta
function titularMaiusculo(array &$conta)
{
    $conta['titular'] = strtoupper($conta['titular']);
}