<?php

$teste = "asd";

echo "$teste global 1 \n";

if(5 > 2){

    $teste = "dsa";
    echo "$teste if\n";

}

echo "$teste global 2\n";

function funcao(){
    $teste = "aasd";
    echo "$teste local 2\n";

}
funcao();

function testandoGlobal(){
    
    global $teste;//chamar var do escopo global para escopo local
    $teste = 2;
    echo "$teste glocal funcao\n";

}

testandoGlobal();
echo "$teste global 3\n";



?>