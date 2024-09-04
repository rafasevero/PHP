<?php

// funcao array_key_exists verifica se há um valor em uma respectiva key de um array
// podemos fazer essa checagem em um if
//ex : array_key_exists("nome",$arr)
// outra função que podemos usar para isso é a isset

    $arr = [
        'nome' => 'rafa',
        'idade' => 18,
    ];

     if(array_key_exists("nome",$arr)){

        echo "A chave existe! \n";

     } else {

        echo "A chave não existe!\n";

     }

     if(array_key_exists("profissao", $arr)){

        echo "A chave existe!\n";
    
     } else{

        echo "A chave não existe\n";

     }

    $x = 10;

     if(isset($x)){

        echo "A var existe! ISSET\n";
     } else{

        echo "A var não existe! ISSET\n";
     }