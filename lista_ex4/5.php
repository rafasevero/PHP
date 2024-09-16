<?php
//Faça um algoritmo para ler 10 números e armazenar em um vetor. 
//Após a leitura total dos 10 números,
// o algoritmo deve escrever esses 10 números lidos na ordem inversa.

$arr = [];


for ($i = 0; $i < 10; $i++) {
    $arr[$i] = (readline("Digite o número " . ($i + 1) . ": "));
}
arsort($arr);// pode-se usar o array_reverse tbm
print_r($arr);
echo "\n";

