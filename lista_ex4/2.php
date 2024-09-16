<?php
$numeros = [];
$negativos = 0;
$positivos = 0;
$pares = 0;
$impares = 0;

for ($i = 0; $i < 10; $i++) {
    $numeros[$i] = (readline("Digite o número " . ($i + 1) . ": "));
}

foreach ($numeros as $numero) {
    if ($numero < 0) {
        $negativos++;
    } elseif ($numero > 0) {
        $positivos++;
    }
    
    if ($numero % 2 == 0) {
        $pares++;
    } else {
        $impares++;
    }
}

echo "Quantos negativos foram digitados: $negativos\n ";
echo "Quantos positivos foram digitados: $positivos \n";
echo "Quantos pares foram digitados:  $pares \n";
echo "Quantos ímpares foram digitados: $impares \n";
?>