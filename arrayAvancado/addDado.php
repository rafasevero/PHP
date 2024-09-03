<?php
//podemos criar novos indices com dados em 1 array
//coloca o nome do array com o novo indice e atribuir 1 valor
//em arrays associativos usa-se o nome da nova chave com a atribuição

$arr = [];

//add valores
print_r($arr);
echo "\n";

$arr[0] = 10;

print_r($arr);
echo "\n";

$arr[1] = 15;

print_r($arr);
echo "\n";

//modificar valores

$arr[1] += 55;

print_r($arr);
echo "\n";

//array associativo
$arrAssoc = [];

print_r($arrAssoc);
echo "\n";

$arrAssoc["carro"] = "BMW";

print_r($arrAssoc);
echo "\n";

$arrAssoc["aviao"] = "Boeing";

print_r($arrAssoc);
echo "\n";

//modificando de BMW para Ferrari
$arrAssoc["carro"] = "Ferrari";

print_r($arrAssoc);
echo "\n";