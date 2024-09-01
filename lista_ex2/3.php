<?php
$a = readline("Quantas maçãs você comprou? \n");
$custo = 0;
if($a < 12){
    $custo = $a * 1.30;
}
if($a >= 12){
        $custo = $a * 1;
}
echo "O valor total da compra foi de R$ :$custo";

