<?php

/*
 * Exiba todos os numeros impares de zero ate 100.
 */

for ($i = 0; $i <= 100; $i++){
    if($i % 2 != 0){
        echo $i . PHP_EOL;
    }
}