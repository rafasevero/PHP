<?php

//do while é menos utilizada que o while
// a sintaxe é invertida

    $j = 0;

    $teste = "rafa";
    
    do{
        echo "testando do while $j\n";
        
        if($j == 2){
            echo "$teste\n";
        }
        
        $j++;
    } while($j <= 10);
    
    $i = 10;
    
    do{
        echo "decrementando, do while $i\n";
        
        if($i == 2){
            echo "$teste\n";
        }
        
        $i--;
    } while($i >= 0);