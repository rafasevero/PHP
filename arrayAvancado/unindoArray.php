<?php
//array_merge = união de arrays, podemos chamar de merge
//como argumento aceita um numero indeterminado de arrays

    $arr1 =[1,2,3];
    $arr2 = [10,40,90];
    $arr3 = [2.1,44.5,43.3];
    $arr4 = ["rafa","severo"];

    $arrMerge = array_merge($arr1, $arr2, $arr3,$arr4);

    print_r($arrMerge);
    echo "\n";