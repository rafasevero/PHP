<?php

    $x = 0;
    
    while($x < 10){
        
        echo "O X é $x\n";
        
        if($x === 5){
            echo "terminando o loop\n";
        break;    
        }
        
        $x++;
    }
    
    echo "Saiu do loop\n";