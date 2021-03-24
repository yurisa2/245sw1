<?php

$entrada = $_POST;

function soma($num1, $num2) {

  $resultado = $num1 + $num2;

  return $resultado;
}

function multiplicacao($num1, $num2) {

  return $num1 * $num2;
}

function divisao($num1, $num2) {

  return $num1 / $num2;
}

function subtracao($num1, $num2) {

  return $num1 - $num2;
}


$resultados = array();

$resultados["soma"] = soma($entrada["Entrada1"], $entrada["Entrada2"]);
$resultados["multiplicacao"] = multiplicacao($entrada["Entrada1"], $entrada["Entrada2"]);
$resultados["divisao"] = divisao($entrada["Entrada1"], $entrada["Entrada2"]);
$resultados["subtracao"] = subtracao($entrada["Entrada1"], $entrada["Entrada2"]);


echo "<pre>";
var_dump($resultados);



?>
