<?php

// array_keys = recebemos um array apenas com as chaves de um array
// array_values =  recebemos um array com apenas os valores de um array
$carro = ['marca' => 'BMW',
          'motor' => '2.4',
          'teto_solar' => true,
          'cambio' => 'manual',
          'portas' => 4 
];

$chaves = array_keys($carro);

print_r($chaves);
echo "\n";

$valores = array_values($carro);

print_r($valores);
echo "\n";

// serve para transformar um array associativo em ym array de indice