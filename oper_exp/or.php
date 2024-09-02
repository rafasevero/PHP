<?php

$a = 10;
$b = 20;
$c = 30;
$d = 40;

if($a > $b || $d > $c){//false e true
    echo "a operação 5 é verdadeira\n";
}

if(($a > $b || $d > $c) && $c < $d){
    echo"a operação 6 é verdadeira\n";
}

if(($a > $b && $d < $c)|| $c < $d){
    echo "a operação 7 é verdadeira\n";
}