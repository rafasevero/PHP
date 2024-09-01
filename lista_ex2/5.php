<?php
$a = readline("Ano de nascimento: ");
$idade = 2024 - $a;
echo "sua idade é $idade\n";
if($idade >= 16){
    echo "você ja pode votar, parabéns!\n";
}
if($idade >= 18){
    echo "e também tirar a carteira de habilitação!";
}