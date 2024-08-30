<?php
//A partir de quatro números que serão fornecidos, 
//calcular a média ponderada, considerando os pesos 1, 2, 3 e 4 respectivamente.

$a = readline("digite um numero: ");
$b =  readline("digite outro: ");
$c =  readline("digite um numero: ");
$d =  readline("digite outro: ");

$p1 = 1;
$p2 = 2;
$p3 = 3;
$p4 = 4;


$ponderado = (($a * 1) + ($b * 2)+($c * 3)+($d * 4))/10;

echo "a media ponderada é de : $ponderado\n";