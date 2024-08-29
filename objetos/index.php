<?php
//objeto é considerado um tipo de dado

class Pessoa{

    function falar(){
        echo "Olá pessoal";
    }
}
$rafa = new Pessoa();

$rafa ->nome = "Rafa";

echo $rafa ->nome;

echo "\n";

$rafa -> falar();

//"->" = refere-se ao obj


?>