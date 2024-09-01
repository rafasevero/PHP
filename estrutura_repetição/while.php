<?php
//while: estrutura de repetição, que executa o código N vezes
//até satisfazer a condição
//geralmente precisa de um contador

//definição do contador
$x = 0;


//inicio/definição da estrutura
while($x < 10){
    
    //corpo do loop
    echo "$x \n";
    
    //incremento do contador
    $x += 1;
}

echo "Continuando código ... \n";

$y = 0;

while($y <= 10){
    
    echo "$y \n";
    $y += 2;
}

echo "Continuando código 2 ... \n";

$z = 10;

while($z > 0 ){
    
    echo "$z \n";
    $z --;
}
echo "continuando codigo 3...\n";


$a = 10;

while($a > 0 ){
    
    if($a % 2 != 0){
        echo "$a \n";
    }

    $a --;
}