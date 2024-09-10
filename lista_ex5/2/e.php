<?php
    function pesoIdeal($a,$b){
        switch($b){
            case 1:
                $res = (62.1 * $a) - 44.7;
                echo "O peso ideal é de $res";
                break;
            case 2:
                $res = (72.7 * $a) -58;
                echo "O peso ideal é de $res\n";   
        }
    }



$a = readline("Digite a sua altura :");
echo "1 -> Feminino\n";
echo "2 -> Masculino\n";
$b = readline("Sexo: ");
pesoIdeal($a,$b);
