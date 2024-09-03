<?php

//func_get_arg = retorna uma lista com os argumentos de uma função
//func_num-args = retorna o numero de argumentos de uma função

function soma($a, $b, $c){

    print_r(func_get_args());
    
    echo "\n";

    echo func_num_args(). "\n";


    return $a + $b;

}
soma(2, 4, 4);