<?php
//Dadas a base e a altura de um retângulo, calcular o perímetro, a área e a diagonal.
$b = readline("digite a base de um retangulo: ");
$a = readline("digite a altura do retângulo: ");
$p = ($a*2) + ($b*2);
$area = $a * $b;
$d = sqrt(($b * $b) + ($a * $a));
echo "o perimetro é $p\n a área é $area\n e a diagonal é $d\n";