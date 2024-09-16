<?php
//Escreva um programa que declare um array. O array deve ser preenchido automaticamente 
//com números múltiplos de 5 até possuir 10 elementos. 
//Depois disso imprima cada valor.

$array = [];

// Preencher o array com múltiplos de 5
for ($i = 1; $i <= 10; $i++) {
    $array[] = $i * 5;
}
print_r($array);
  


