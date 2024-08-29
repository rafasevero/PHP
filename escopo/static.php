<?php

function teste(){

    $a = 0;
    $a++;//1,1,1

    echo"$a\n";

}
teste();
teste();
teste();

function testeStatic(){

    static $a = 0;
    $a++;

    echo"$a\n";

}
testeStatic();
testeStatic();
testeStatic();


?>