<?php

//switch pode substituir o if em alguns casos
// break é usado para n ser mais executado
// default pode ser usada caso nenhuma condição seja satisfeita

    $x = 5 ;
    
    switch($x){
        case 0:// "se o x foir igual a 0"
            echo " x é igual a 0\n";
            break;
        case 1:
            echo" x é igual a 1\n";
            break;
        default:
            echo"x não é igual a nenhum dos valores mencionados\n";
    }
    
    
    $y = "rafa" ;
    
    switch($y){
        case "rafa":// "se o x foir igual a 0"
            echo "o nome é rafa\n";
            break;
        case "lara":
            echo" o nome é lara\n";
            break;
        default:
            echo"o nome não foi encontrado\n";
    }