<?php

    $arr = [
        'Rafa' => 17,
        'Mateus' => 26,
        'Paulo' => 28,
        'Rafael' => 24,
        'Maria' => 20
    ];

    //crescente
    asort($arr);

    print_r($arr);
    echo "\n";


    //reversa
    arsort($arr);

    print_r($arr);
    echo "\n";
