<?php
//Elaborar um programa que leia sucessivamente valores inteiros e no final apresente a somatória, 
//a média e a quantidade de valores lidos. 
//O programa deve ler os valores enquanto o usuário estiver fornecendo valores diferentes de zero. 
$cont = 0;
$soma = 0;
$media = 0;
do{
    $a = readline("digite um valor: ");
    $cont ++;
    $soma += $a;
    $media = $soma / $cont;
    if($a == 0){
        $media = $soma / ($cont-1);
    }

}while($a != 0);
echo "a soma de todos os valores $soma\n";
echo "a média entre os números foi de $media\n";
echo "a quantidade de valores lidos foi de $cont\n";