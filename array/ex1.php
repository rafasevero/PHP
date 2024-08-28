<?php
$arr = ['nome' => 'harry', 'profissão' => 'cantor', 'idade' => 30];
echo $arr['nome'];
echo "\n";
print_r($arr);
echo "\n";
echo $arr['profissão'];

if('idade' >= 18){
    echo "maior de idade!!";
}
if('idade'< 18){
    echo "menor de idade!!";
}


?>