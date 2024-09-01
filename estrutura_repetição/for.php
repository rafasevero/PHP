<?php

$j = 0 ;
$nome = "severo";

//for é a mais utilizada
//sintaxe + organizada, em apenas 1 linha


//for(CONTADOR;CONDIÇÃO;INCREMENTO)
for($i = 0; $i <= 10; $i++ ){
    
    if($i == 4){
        echo "$nome\n";
    }
    if($i == 8){
        break;
    }
    
    echo "testando for $i \n";
}




