<?php
// para ordenar em ordem crescente usa-se a função sort
// o inverso disso é rsort
// usa-se em ordem alfabética tbm

$arr = [2, 1, 3, 54, 123, 65, 12, 3211, 4];

sort($arr);

print_r($arr);
echo "\n";

rsort($arr);
print_r($arr);
echo "\n";