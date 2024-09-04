<?php
//podemos criar muitas variáveis com base em 1 array
//para isso vamos utilizar a função list
//ex: list($nome,$idade,$profissao) = $pessoa

    $pessoa = ["Rafa",17,"programadora","castanho"];

    print_r($pessoa);
    echo "\n";


    list($nome, $idade, $profissao,$corDosOlhos) = $pessoa;

    echo "$nome\n";
    echo "$idade\n";
    echo "$profissao\n";
    echo "$corDosOlhos \n";