<?php
// == igualdade
// === identico ex ; 3 === "3" = false (pq é um inteiro com string)
// !=  diferença
// ! == não identico

$a = 1;
$b = "1";

if($a != $b){
    echo "A é diferente de B 1 \n";
}
if($a !== $b){
    echo "A é diferente de B 2\n";
}
if(1 !== 2){
    echo "não é identico 1\n";
}
if(1 !== "1"){
    echo "não é identico 2\n";
}
