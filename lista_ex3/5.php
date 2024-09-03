<?php
//Elaborar um programa que leia valores inteiros até que o valor zero seja informado.
//No final deve ser apresentado o maior e o menor valor fornecido pelo usuário.
$maior = PHP_INT_MIN; // Inicializa o maior valor com o menor inteiro possível
$menor = PHP_INT_MAX; // Inicializa o menor valor com o maior inteiro possível

do {
    $a = readline("Digite um valor (0 para sair): "); 

    if ($a != 0) {
        if ($a > $maior) {
            $maior = $a;
        }
        
        if ($a < $menor) {
            $menor = $a;
        }
    }

} while ($a != 0);

// Exibe os resultados
echo "O maior número digitado foi $maior\n";
echo "O menor número digitado foi $menor\n";
?>