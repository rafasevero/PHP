<?php
//Dada a hora, calcular quantos minutos se passaram desde o início do dia.

$hora = (int)readline("Digite a hora atual (0-23): ");
$minuto = (int)readline("Digite os minutos atuais (0-59): ");

$total = ($hora * 60) + $minuto;
echo "se passaram $total minutos desde o início do dia"; 