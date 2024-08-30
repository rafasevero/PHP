<?php
//Sabendo-se que 100 quilowatts de energia custa um sétimo do salário mínimo, 
//fazer um algoritmo que receba o valor do salário mínimo e a quantidade de quilowatts gasta por uma residência. 
//Calcular: o valor em reais de cada quilowatt, o valor em reais a ser pago e o valor a ser pago com desconto de 10%.
$a = readline("Digite o valor do salário: ");
$b = readline("digite a quantidade gasta por residência: ");
$s = $a /7;
$precoK = $s/100;
$reais = $b * $precoK;
$reais1 = ($b * $precoK) - ($b * $precoK*0.10) ;
echo "o valor em reais de cada quilowatt R$: $precoK\n o valor em reais a ser pago R$: $reais\n o valor a ser pago com desconto de 10%: $reais1";

 
