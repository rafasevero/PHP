<?php

//função shuffle podemos reorganizar os itens em ordem aleatória
//passamos apenas o array como parâmetro
//retorna um array em ordem aleatória

$arr = range(1,20);

shuffle($arr);

print_r($arr);