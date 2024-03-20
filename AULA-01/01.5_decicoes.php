<?php
// if (se) | elseif (se-nao-se) | else (se-nao)
/*
 * Operadores logicos
 * https://www.php.net/manual/en/language.operators.precedence.php
 * >= - Maior igual
 * <= - Menor igual
 * <  - Menor
 * >  - Maior
 * == - Igual à
 * and - True and True - pode entrar
 * or  - False and true - pode entrar
 *
 */


$idade = 13;
$numerodePessoas = 2;

echo "Voce só pode entrar a partir de 18 anos ou ";
echo "a partir de 16 anos acompanhado" . PHP_EOL;

if ($idade >= 18){
    echo "Você tem $idade anos, então pode entrar.";
} elseif ($idade >= 16 && $numerodePessoas > 1){
    echo "Você tem $idade anos, está acompanhado(a), então pode entrar.";
} else {
        echo "Você só tem $idade anos. Você não pode entrar.";
}

echo PHP_EOL;
echo "Adeus";