<?php

//caso necessário retornar varios valores em uma função
//podemos formar um array para retorno
// e então acessar os índices de forma isolada
//com a nova variável que contém o retorno

    function alteraDados($nome, $idade){
        $nome = " Mr. $nome\n";
        $idade = "$idade anos\n";
        return [$nome, $idade];
    }

    $dados = alteraDados("luisa",33);

    print_r($dados);

    echo "\n";

    echo "Olá $dados[0]você tem $dados[1]\n";