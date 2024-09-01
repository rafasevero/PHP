<?php

// foreach é orientada a um array
// devemos usar um para que a estrutura repita em todos os elementos do mesmo
// foreach($array as $item)


    $nomes = ["rafa","luca","lara","maju","leo"];
    
    $a = 10;
    
    
    
    foreach($nomes as $nome){
        
        echo "o nome do indice atual é $nome\n";
        
        if($nome == "rafa"){
            echo "opa $a \n";
        }
        
    }
