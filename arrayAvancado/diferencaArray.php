<?php
// array_diff = verificar a diferença entre dois ou mais arrays

$arr1 = [1,2,3];
$arr2 = [2,4,6];

$diff = array_diff($arr1,$arr2);

print_r($diff);
echo "\n";