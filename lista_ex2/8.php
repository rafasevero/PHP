<?php 

$a = readline("Qual o valor da etiqueta ? R$\n");
echo "1 : À vista em dinheiro com 10% de desconto.\n";
echo "2 : À vista no cartão com 5% de desconto.\n";
echo "3 : Em 2 vezes, preço normal da etiqueta.\n";
echo "4 : Em 3 vezes, preço normal da etiqueta com juros de 10%.\n";
$b = readline("Código de pagamento (1/2/3/4) :\n");
$total = 0;
if($b == 1){
   $total = $a - ($a*0.1); 
   echo"o total foi de R$$total\n";
} else if($b == 2){
    $total = $a - ($a*0.05);
    echo"o total foi de R$$total\n";
} else if($b == 3){
    $total = $a;
    echo"o total foi de R$$total\n";
} else if($b == 4){
    $total = $a + ($a*0.10*3);
    echo"o total foi de R$$total\n";
}