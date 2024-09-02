<?php
//Uma revendedora de carros usados paga a seus vendedores um salário fixo mensal, 
//além de uma comissão fixa por cada carro vendido e mais 5% do valor total das vendas realizadas pelo vendedor. 
//Escreva um algoritmo que receba como entrada o número de carros vendidos pelo vendedor,
// o valor total das vendas, o salário fixo mensal e o valor da comissão por carro vendido. 
//O algoritmo deve calcular e exibir o salário final do vendedor, 
//que é a soma do salário fixo, da comissão por carro vendido, e 5% do valor total das vendas.
$numC = readline("numero de carros vendidos: ");//4
$vTotal = readline("valor total das vendas: ");//R$300000
$salarioFixo = readline("salario fixo: ");//2000
$comissao = 100;
$somaTotal = ($salarioFixo + ($comissao*$numC) + ($vTotal*0.05));//2000+(100*4)+(300000*0.05)

echo"o salário final do trabalhador é de R$: $somaTotal\n";
