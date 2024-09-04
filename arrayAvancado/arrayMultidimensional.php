<?php
// array multidimensional = matriz
// para acessar este tipo de array também utilizamos indeices, acessando o externo e depois os internos
$arr = [
    [1,2,3],
    [2,4,6]
];

print_r($arr);
echo "\n";

echo $arr [0][1] . "\n";// acessando primeiro array, e segundo elemento
echo $arr [1][2] . "\n";// acessando segundo array, e ultimo elemento

echo count($arr) . "\n";
echo count($arr[0]) . "\n";

