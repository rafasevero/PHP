<?php
function soma($a, $b){
    $res = $a + $b;
    echo "o resultado foi de $res\n";
}

function sub($a, $b){
    $res = $a - $b;
    echo "o resultado foi de $res\n";
}

function mult($a, $b){
    $res = $a * $b;
    echo "o resultado foi de $res\n";
}

function div($a, $b){
    $res = $a / $b;
    echo "o resultado foi de $res\n";
}

$a = readline("DIGITE UM VALOR\n ");
$b = readline("DIGITE OUTRO VALOR\n ");
$escolha = readline("Escolha um operador \n
adição(+)\n - subtração(-)\n - multiplicação(x) \n - divisão(/)\n ");
if($escolha == "+"){
    soma($a,$b);
}
if($escolha == "-"){
    sub($a,$b);
}
if($escolha == "x"){
    mult($a,$b);
}
if($escolha == "/"){
    if($b == 0){
        echo "ERRO!!!\n";
    }else{
    div($a,$b);
    }    
}

