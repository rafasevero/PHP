<?php
//eu desejo testar uma certa condição, apenas
// se uma primeira condição for satisfeita e assim por diante.
if ( 10 > 2){
    echo "entrou no primeiro if\n";
    
    if("teste" == "teste"){
        echo "entrou no segundo if\n";
    }
}


if ( 10 < 2){
    echo "entrou no primeiro if2\n";
    
    
    if("teste" != "teste"){
        echo "entrou no segundo if 2\n";
    } else {
        echo "entrou no segundo else 2\n";
    
        
    }
} else{
    
    echo "entrou no primeiro else\n";
    
}

$escopo = 10;

if ( 10 > 2){
    echo "entrou no primeiro if2\n";
    
    
    if("teste" == "teste"){
        echo "entrou no segundo if 2\n";
        echo $escopo;
    } else {
        echo "entrou no segundo else 2\n";
    
        
    }
} else{
    
    echo "entrou no primeiro else\n";
    
}