<?php

// com a função array_slice podemos resgatar uma faixa de elementos de um array;
// passamos 3 parametros: o array, índice inicial e quantos elementos serão resgatados

$arr = [2,4,6,8,10,12,14,16,18];

$slice1 = array_slice($arr,1,3);

print_r($slice1);
echo "\n";

$slice2 = array_slice($arr,4,4);

print_r($slice2);
echo "\n";

$slice3 = array_slice($arr,4);

print_r($slice3);
echo "\n";

$slice4 = array_slice($arr,4,-3);

print_r($slice4);
echo "\n";