<?php
//podemos add um loop dentro do outro
//contador deve ser único
//loop interno será executado x vezes quanto o loop externo for
$i = 0;

while($i <= 10){
    
    echo "loop EXTERNO $i \n\n";
    
    //segundo contador
    $j = 0;
    
    while($j <= 5){
        echo "loop interno $j\n";
        $j++;
    }
    echo "\n";
    
    $i++;
    
}