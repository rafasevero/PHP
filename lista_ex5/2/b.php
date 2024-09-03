<?php

function parImpar($a){
    if($a % 2 == 0){
        echo "O número $a É PAR\n";
    } else{
        echo "O número $a É ÍMPAR \n";
    }
}

$a = (int)readline("Digite um número: ");
parImpar($a);