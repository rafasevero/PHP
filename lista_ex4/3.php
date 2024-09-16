<?php
//Ler um vetor de 10 posições (aceitar somente números positivos). 
//Escrever a seguir o valor do maior elemento do vetor e a respectiva 
//posição que ele ocupa no vetor.

$arr = [];
$maior = 0;

for ($i = 0; $i < 10; $i++) {
    $arr[$i] = (readline("Digite o número " . ($i + 1) . ": "));
    if($arr[$i] < 0){
        echo "Erro, somente números positivos!\n";
        break;
    }
    if($arr[$i] > $maior){
        $maior = $arr[$i];
    }
    $posicao = array_search($maior,$arr);// usa a variável e o array
}
print_r($arr);
echo "Maior numero digitado é $maior\n";
echo "A posição do maior número digitado é $posicao\n";
