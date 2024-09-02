<?php


if(5 > 10 && 10 > 5){//false e true
    echo "entrou no if 1\n";
}

if(50 > 10 && 10 > 5){
    echo "entrou no if2\n";//true e true
}

if(50 > 10 && 10 > 500){
    echo "entrou no if3\n";//true e false
} 

if(50 > 100 && 10 > 500){
    echo "entrou no if4\n";// false e false
}

$a = 10;
$b = 5;
$c = 12;
$d = 12;

if($a > $b && $c == $d){//true e true
    echo "entrou no if5\n";
}

// || = or = um dos lados precisa ser true
//