<?php
//efeito contrario do extract
// podemos criar um array a partir de variáveis
//passamos para a função o nome das variaveis em string
$marca = "BMW";
$motor = "3.0";
$tetoSolar = true;
$portas = 4;

$carro = compact("marca","motor","tetoSolar","portas");

print_r($carro);