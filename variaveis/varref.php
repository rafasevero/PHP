<?php


$x = 10;

$y =& $x;

echo $x;
echo "\n";
echo $y;
echo"\n"; 

$y =15;

echo "atribuição após ref\n";

echo $x;
echo "\n";
echo $y;
echo"\n";

$x = 20;

echo"atribuição após ref2\n";
echo $x;
echo "\n";
echo $y;
echo"\n";

$nome ="rafa";

$nome2 =& $nome;// =& mesma coisa que ==

echo $nome;
echo "\n";
echo $nome2;
echo"\n";

$nome2 = "joão";

echo $nome;
echo "\n";
echo $nome2;
echo"\n";


?>