<?php

$a = 10;
$b = 15;

function testeEscopo(){

    $a = 5;
    global $b;

    static $c = 0;

    $a++;

    $b++;

    $c++;

    echo "ESCOPO LOCAL DE A: $a \n";

    echo "ESCOPO GLOBAL NA FUNÇÃO DE B: $b \n";

    echo "ESCOPO STATIC NA FUNÇÃO DE C: $ \n";

}

echo "ESCOPO GLOBAL DE A: $a \n";
echo "ESCOPO GLOBAL DE A: $b \n";

testeEscopo();

echo"ESCOPO GLOBAL DE B 2: $b\n";

testeEscopo();
