<?php

$ano = $_GET['ano'];
$mes = $_GET['mes'];
$dia = $_GET['dia'];

$dataDigitada = "$ano-$mes-$dia";

$milesegundos = strtotime($dataDigitada);
// echo $milesegundos;

echo date('d-m-Y', $milesegundos);

?>