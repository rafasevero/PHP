<?php

$a = readline("Digite a idade do nadador: ");

if($a >= 5 && $a < 7){
    echo "a categoria é : Infantil A ";
} else if($a >= 8 && $a < 10){
    echo "a categoria é : Infantil B ";
} else if($a >= 11 && $a < 13){
    echo "a categoria é : Juvenil A ";
} else if($a >= 14 && $a < 17){
    echo "a categoria é : Juvenil B ";
} else if($a >= 18){
    echo "a categoria é : Sênior ";
}