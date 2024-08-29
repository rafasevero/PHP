// LOCAL = variavel declarada em uma função
// GLOBAL = variáveis declaradas fora de funções
//STATIC = variável declarada dentro da função,
// porém seu valor permanece salvo entre chamadas da funçãp
// parametros da função = variaveis passadas para 1 função
//podendo ser utilizadas ao longo da mesma

<?php

$x = 10;

echo "$x global \n";

function teste(){

    $x = 5;
    echo "$x local \n";

}

teste();

function testando(){

    $x = 12;
    echo "$x local \n ";
}

$x = 99;

testando();
teste();

echo "$x global\n";

?>