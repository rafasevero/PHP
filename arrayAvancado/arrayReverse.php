<?php

//array_reverse = array ao inverso
//passamos apenas o array como argumento

$arr = [1,2,3,4,5];

$arrRev = array_reverse($arr);

print_r($arr);
echo "\n";

print_r($arrRev);
echo "\n";

$arr2 = ["Matheus",12,true,[1,2]];

$arr2Rev = array_reverse($arr2);

print_r($arr2Rev);