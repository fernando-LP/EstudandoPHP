<?php

# Vamos utilizar um vetor, e como informamos no php que uma variavel é um vetor? Atravéz do conchetes [ ]
# O valor dentro do vedor/array tem um indice, partindo do 0

$idadeList = [21,22,34,66,89,12,10];

#echo $idadeList[0]; # Busca o valor da possição 0 do array;

## Como repedir a idade de todos os alunos?

for($i = 0; $i < count($idadeList); $i++){
    echo $idadeList[$i] . PHP_EOL;
}