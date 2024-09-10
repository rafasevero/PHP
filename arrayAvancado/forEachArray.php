<?php
//a estrutura foreach com arrays, podemos iterar facilmente com ela
// utilizando a notação de chave => valor, temos acesso rapido também a arrays associativos
// ex: foreach($itens as $key => $value)
$Rafa = [
    'nome' => 'Rafa',
    'idade' => 17,
    'profissao' => 'fisioterapeuta'
];

$luisa = [
    'nome' => 'luisa',
    'idade' => 22,
    'profissao' => 'esteticista'
];

foreach($Rafa as $carac => $value){
    echo "$carac => $value \n ";

}
foreach($luisa as  $value){
    echo " $value \n ";// teria acesso ao valor e não ao nome da chave
}