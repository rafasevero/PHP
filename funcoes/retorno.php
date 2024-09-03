<?php

function soma($n1, $n2){

    return $n1 + $n2;
}
soma(4,4);

$x = soma (2,4);

echo "$x\n";

$y = soma($x, 19);

echo "$y \n";

function testeRetorno(){

    return "Testando";
}

$z = testeRetorno();

echo "$z \n";