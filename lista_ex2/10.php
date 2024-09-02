<?php
$a = readline("Qual o valor da compra? R$");
$lucro = 0;
if ($a <= 20){
    $lucro = $a - ($a * 0.45);
}else{
    $lucro = $a -($a*0.3);
}
echo "o valor total do lucro é de :R$$lucro";


