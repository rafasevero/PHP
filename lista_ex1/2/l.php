<?php

//Dado um número de conta corrente com três dígitos, calcular seu dígito verificador, da seguinte forma:
//Somar o número da conta pelo seu inverso (igual ao exercício k);
//Multiplicar cada dígito da soma pela sua ordem posicional e somar estes resultados (primeiro * 1, segundo * 2, terceiro * 3, etc );
//O último dígito desse resultado é o dígito verificador da conta. 

$a = readline("digite um numero de 3 digitos:\n ");

// extrair os dígitos do número da conta
$centena = (int) ($a / 10/10)% 10;
$dezena =(int) ($a / 10)% 10;
$unidade = $a % 10;

// formar o número invertido
$invertido = ($unidade * 100)+ ($dezena * 10) + $centena;

// somar o número com o número invertido
$soma = $a + $invertido;

// extrair os dígitos da soma e multiplicar a posição
$centena2 = (int) (($soma / 10/10)% 10)*1;
$dezena3 =(int) (($soma / 10)% 10)*2;
$unidade4 = ($soma % 10)*3;


$total = $centena2 + $dezena3 + $unidade4;
echo "resultado = $total\n";

// Obter o último dígito do resultado como dígito verificador
$digito = $total % 10;
echo "o digito verificador da sua conta é $digito";
