<?php
//in_array verifica se um item passado por parametro está no array
// o retorno é true se encontrar o item e false se não encontrar
//passa-se dois argumentos para a função : in_array("item",$arr)

$arr = ['banana','maça','batata','pera','mamão'];

if(in_array("batata",$arr)){
    echo "Há o item batata no array\n";
} 
else{
    echo "Não há batata no array\n";
}

$b = "banana";

if(in_array($b,$arr)){
    echo "há o item banana no array\n";
}
else{
    echo "não há o item banana no array\n";
}

if(in_array("teste",$arr)){
    echo "há o item teste no array\n";
}
else{
    echo "não há o item teste no array\n";
}




