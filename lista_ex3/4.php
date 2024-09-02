<?php
//Elaborar um programa que apresente o resultado da soma e a média dos valores pares 
//situados na faixa numérica de 50 a 70.


$x = 50;
$soma = 0;
$quant = 0;

while($x <= 70){
    
    echo "$x \n";
    $soma += $x;
    $x += 2;
    $quant++;
}
$media = $soma / $quant ;
echo"a média entre os números é de $media\n";
echo "A soma é de: $soma\n";