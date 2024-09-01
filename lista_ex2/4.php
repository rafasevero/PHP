<?php
$p = readline("Nota 1ª avaliação: \n");
$s = readline("Nota 2ª avaliação: \n");
$media = ($p + $s)/ 2;
if($media >= 6){
    echo "Com a média de $media, você foi aprovado";
}
if($media < 6){
    echo "Com a média de $media, você foi reprovado";
}