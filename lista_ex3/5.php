<?php
//Elaborar um programa que leia valores inteiros até que o valor zero seja informado.
//No final deve ser apresentado o maior e o menor valor fornecido pelo usuário.
$maior = 0;
$menor = 9999;
$ajudante = 0;
do{

$a = readline("Digite um valor : ");
$ajudante = $a;
if ($ajudante > $maior){
    $maior = $ajudante;
}else if($ajudante > $menor){
    $
}

}while($a != 0);

echo "o maior número digitado foi $maior\n";
echo "e o menor foi $menor\n";
