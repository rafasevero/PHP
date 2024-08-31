<?php
//Dado um número de três dígitos no formato CDU, mostre como resultado a sua inversão (formato UDC) (por exemplo, para 123, o resultado será 321).


$a = readline("Digite um numero de 3 digitos: ");//123


$centena = (int) ($a / 10/10)% 10;
$dezena =(int) ($a / 10)% 10;
$unidade = $a % 10;

$invertido = ($unidade * 100)+ ($dezena * 10) + $centena;
echo "o numero invertido de $a é $invertido";
