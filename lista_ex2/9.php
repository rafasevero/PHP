<?php

$a = readline("Digite um valor: ");

if($a >= 30 && $a <= 90){
    echo "o numero está entre 30 e 90";
}else if($a >120){
    echo "o numero é maior que 120";
}else{
    echo "o numero não se encaixa nos padrões!!!";
}