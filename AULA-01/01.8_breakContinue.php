<?php

// Imprima todos exceto o 13.
for($i = 1; $i <= 15; $i++){
    if($i == 13){
        continue;
    }
    echo "#$i" . PHP_EOL;
}