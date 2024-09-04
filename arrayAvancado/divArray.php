<?php
//podemos dividir um array grande em diversos arrays de numero de elementos iguais
//função array_chunk
//passamos o array como argumento e também o número de elementos que cada array deve ter
$arr = range(1,20);

print_r(array_chunk($arr,4));
echo "\n";

$arrays = array_chunk($arr,10);//vai do indice 11 ate 20 em um array só

print_r($arrays);
echo "\n";

print_r($arrays[1]);
echo "\n";