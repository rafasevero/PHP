<?php

if(!(5 > 2)){//true > false
    echo "a operação 1 é verdadeira\n";
}

if(!(5 > 20)){// false > true
    echo "a operação 2 é verdadeira\n";
}

$a = 10;
$b = 20;

if(!($a >= $b)){
    echo "a operação 3 é verdadeira\n";
}
//! = not