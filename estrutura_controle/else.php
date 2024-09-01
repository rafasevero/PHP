<?php

//else pode executar quadno a expressão if é falsa

if(5 > 2){
    echo "entrou no if\n";
} else{
    echo "entrou no else\n";
}

if("teste"===5){
    echo "entrou no if 2\n";
} else{
    echo "entrou no else 2\n";
}

// variaveis

$a = 10;
$b = 20;

if($a > $b){
    
} else{
    echo "entrou no else 3\n";
}

$msg =  "entrou no else 4\n";

if ($a > $b){
    
} else{
    echo $msg;
}