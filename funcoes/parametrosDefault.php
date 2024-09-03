<?php

    function teste ($a = "teste"){

        echo "O valor de A é: $a\n";


    }

teste();    
teste("rafa");


function testando ($b,$a = "x"){

    echo "o valor de A é $a e de B É $b \n";

}//argumentos default sempre à direita

testando("lalalala");
testando("1","2");
