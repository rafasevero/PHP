<?php
//Leia 2 números inteiros positivos e apresente a soma dos n números existentes entre eles.
//Exemplo: 1 e 4 deve apresentar a soma de 2 e 3.
$soma = 0;

function entre($a,$b){
    $soma = 0;
    for ($i = $a; $i <= $b; $i++){
        $soma += $i;
        $res = $soma - ($a + $b);
    }
    echo "a soma entre os números entre $a e $b é igual a $res\n";
}
$a = readline("Digite um número: ");
$b = readline("Digite outro número: ");
entre($a,$b);