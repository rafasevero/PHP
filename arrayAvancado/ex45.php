<?php
$arr = range(10, 45);
print_r($arr);
echo"\n";
//          enqunato i for menor que a contagem do array 
for ($i = 0; $i < count($arr);$i++){
    $soma = $arr[$i] + 6;

    if($soma > 30){
        echo "o número $soma é muito alto\n";
    } else{
        echo "$soma\n";

    }

}