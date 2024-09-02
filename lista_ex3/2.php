<?php
//Elaborar um programa que leia 10 valores inteiros e no final apresente a somatória e a média deles.
$soma = 0;
$media = 0;
for($i = 0; $i <= 10; $i++ ){
$a = readline("digite um valor: ");
$soma += $a;
$media = $soma / 11;
}
echo "a média entre os números foi de $media\n";