<?php

function velocidadeMaxima($vel){

    if(is_int($vel)){
        echo "o carro atinge a velocidade máxima de $vel km/h\n";
    } else{
        echo "Por favor, passe um numero inteiro";
    }

}
velocidadeMaxima(200);
velocidadeMaxima(300);
velocidadeMaxima(500);

echo "teste continuando\n";

$velocidade = 125;

velocidadeMaxima($velocidade);

// php ignora parametro desnecessario
velocidadeMaxima(250, "teste");

velocidadeMaxima( "teste");

function descreverAnimal($nome, $raca){
    echo "o $nome é da $raca\n";
}

descreverAnimal("zé","vira lata");
descreverAnimal("boi","boiadeiro australiano");
//maneira incorreta(trocou a ordem)
descreverAnimal("poodle","luca");

