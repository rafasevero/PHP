<?php
// array_reduce tem como objetivo reduzir m array a apenas 1 valor
// array_reduce($arr,$funcao)(podemos passar uma segunda função como parametro)

$arr = [1, 2, 4, 19, 100, 12, 23,4,12];

function soma($a,$b){
    return $a + $b;
}


function subtracao($a,$b){
    return $a - $b;
}

$resultado = array_reduce($arr, "soma");

echo "$resultado\n";

$resultado2 = array_reduce($arr, "subtracao");

echo "$resultado2\n";
