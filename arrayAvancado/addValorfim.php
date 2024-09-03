<?php

//podemos add valor ao fim de um array utilizando a
//atribuição sem determinar um índice
//entao o valor atribuido será enviado para o ultimo e novo indice do array

    $arr = [1,2,3];
    $arr[] = 4;

    print_r($arr);
    echo "\n";

    $arr[] = 5;

    print_r($arr);
    echo "\n";

    $arr = [];

    $arr2[] = 1;

    print_r($arr2);
    echo "\n";

    $arr3 = [];

    $arr3['teste'] = 'testando';

    print_r($arr3);
    echo "\n";
