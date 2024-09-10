<?php

//Leia três números inteiros: a, b e c, onde a>1; e apresente a soma de todos os números inteiros de b até c 
//que sejam divisíveis por a. Exemplo: 
//Para os valores de entrada 2 (para a), 5 (para b) e 10 (para c), a soma será 6+8+10= 24.

function a($a, $b, $c){
    if($a == 1 && $a == 0){
        echo "erro, escolha outro numero!\n";
    }
    $soma = 0;
    for ($i = $b; $i <= $c; $i++){
        if ($i % $a == 0){
            $soma += $i;
        }
    }
    echo "o total da soma foi de $soma";


}

$a = (int)readline("Digite o primeiro número: ");
$b = (int)readline("Digite outro número: ");
$c = (int)readline("Digite outr número: ");
a($a,$b,$c);

