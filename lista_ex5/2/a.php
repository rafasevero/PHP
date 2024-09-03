<?php
//Leia um número inteiro e retorne true se o número é múltiplo de 4 e false se o número não é múltiplo de 4.

function mult($a){
    if($a % 4 == 0){
        echo "O número $a é múltiplo de 4\n";
    } else{
        echo "O número $a não é múltiplo de 4\n";
    }
}

$a = (int)readline("Digite um número: ");
mult($a);