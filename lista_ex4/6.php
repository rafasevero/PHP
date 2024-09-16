<?php
// Crie dois vetores, cada um com capacidade para armazenar 10 números.
// Solicite ao usuário que entre com os valores nestes dois vetores.
// O programa deverá mostrar a multiplicação dos dados dos vetores, 
// em cada um de suas respectivas posições.
// Ex. vetor_a[0] * vetor_b[0] e assim por diante.

$a = [];
$b = [];

for ($i = 0; $i < 10; $i++) {
    $a[$i] = (readline("Digite o " . $i+1 ."º" . " número para o primeiro array: \n "));
}

for ($i = 0; $i < 10; $i++) {
    $b[$i] = (readline("Digite o " . $i+1 ."º" . " número para o segundo array: \n "));
}
for ($i = 0; $i < 10;$i++){
    $mult = $a[$i] * $b[$i];
    echo "$a[$i] x  $b[$i] = $mult \n";
}
