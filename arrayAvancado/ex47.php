<?php

$carro = ["jaguar",3.0,"azul",2018,"teto solar automatico"];

print_r($carro);
echo "\n";

list($marca,$motor,$cor,$ano,$diferencial)= $carro;

echo "$marca\n";
echo "$motor\n";
echo "$cor\n";
echo "$ano \n";
echo "$diferencial \n";
