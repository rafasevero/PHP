<?php
//Ler um vetor A de 10 números. Após, ler mais um número e guardar em uma variável B.
// Armazenar em um vetor C o resultado de cada elemento 
//de A multiplicado pelo valor B. Logo após, imprimir o vetor C.

$a = [];
$c = [];
for ($i = 0; $i < 11; $i++) {
    $a[] = (readline("Digite o número " . ($i + 1) . ": "));
    
}
$b = $a[10];
foreach($a as $mult){
   $calc = $mult * $b;
   $c[] = $calc; 


}

print_r($c);