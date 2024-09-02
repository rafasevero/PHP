<?php
$user1 = readline("Dois ou Um ? ");
$user2 = readline("Dois ou Um ? ");
$user3 = readline("Dois ou um ? ");
$ganhador1 = 0;
$ganhador2 = 0;
$eliminado = 0;
$ganhadorFinal = "FODA";
$primeiro = "rafa";
$segundo = "luca";
$terceiro = "luis";

if($user1 == $user2 && $user1 != $user3 ){
    $ganhador1 = $primeiro;
    $ganhador2 = $segundo;
    $eliminado = $terceiro;
    echo "os jogadores $ganhador1 e $ganhador2 passaram para a próxima fase\n";

}else if($user1 == $user3 && $user1 != $user2){
    $ganhador1 = $primeiro;
    $ganhador2 = $terceiro;
    $eliminado = $segundo;
    echo "os jogadores $ganhador1 e $ganhador2 passaram para a próxima fase\n";
}else if($user2 == $user3 && $user2 != $user1 ){
    $ganhador1 = $segundo;
    $ganhador2 = $terceiro;
    $eliminado = $primeiro;
    echo "os jogadores $ganhador1 e $ganhador2 passaram para a próxima fase\n";
}else if($user1 == $user2 && $user1 == $user3){
    echo "deu empate, tente novamente!\n";
}

$jogador1 = readline("$ganhador1, Par ou Ímpar ? \n");
$jogador2 = readline("$ganhador2, Par ou Ímpar ? \n");
$numero1 = readline("aleatoriamente... sortear 1 numero...\n");
$numero2 = readline("aleatoriamente... sortear outro numero...\n");
if($jogador1 == "Par" && ($numero1 + $numero2) % 2 == 0){
    $jogador1 = $ganhadorFinal;
    echo "parabéns $ganhador1!";
}else{
    $jogador2 = $ganhadorFinal;
    echo "parabéns $ganhador2!";
}







