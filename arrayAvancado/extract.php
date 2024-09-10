<?php
// função extract podemos criar variaveis rapidamente de arrays associativos;
//o nome da chave será o nome da variável
//se houver uma variável já criada com o nome da chave, a mesma será sobrescita 
 $arr = [
    ' cor' => 'vermelho',
    'forma' => 'retangular',
    'material' => 'aço'
 ];

extract($arr);


echo "$cor \n";
echo "$forma \n";
echo "$material \n";

$nome = "Rafa";

$pessoa = [
    'nome' => 'João',
    'idade' => 17
];

echo "$nome \n";

extract($pessoa);//extraindo da array pessoa a variavel nome

echo "$nome \n";
echo "$idade \n";