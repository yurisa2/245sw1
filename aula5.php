<?php

echo '<pre>';

// Estruturas de repetição

// https://www.php.net/manual/pt_BR/control-structures.foreach.php


$meuPrimeiroArray = array();

$meuPrimeiroArray["Nome"] = "Yuri Sá";
$meuPrimeiroArray["Tel"] = 119999999999;
$meuPrimeiroArray["Email"] = "yuri.sa2@etec.sp.gov.br";
$meuPrimeiroArray["About"] = "@yuri.sa";
$meuPrimeiroArray["SM"] = "@yurisa2";
var_dump($meuPrimeiroArray);

echo '<br>';
echo '<br>';
echo '<br>';


foreach ($meuPrimeiroArray as $chave => $valor) {

  echo "Valor: " . $valor . "<br>";

}



echo '<br>';
echo '<br>';
echo '<br>';

// https://www.php.net/manual/pt_BR/control-structures.for.php

$construido = array();

for ($i=10; $i < 20; $i++) {
  $construido[] = "Valor de i: " . $i;
}

var_dump($construido[7]);


echo '<br>';
echo '<br>';
echo '<br>';

$aleatorios = array();


for ($i=0; $i < 10; $i++) {
  $aleatorios[] = rand();
}

var_dump($aleatorios);

// Teste para ver se funciona
$variavel = 53;

if ($variavel % 2 == 0) {
  echo $variavel . " é par";
}

function ehpar($numero) {

  if ($numero % 2 == 0) {
    $retorno = true;
  } else {
      $retorno = false;
  }

  return $retorno;
}

var_dump(ehpar(722)); // Teste da funcao

foreach ($aleatorios as $key => $value) {
  echo "O numero $value ";
   if (ehpar($value)) {
    echo "É par";
  } else {
    echo "é Impar";
  }
  echo "<br>";
}



while ($a <= 10) {
  echo "Valor de $a <br>";

  $a++; // Se você comentar isso entra no famoso LOOP INFINITO!
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";



$numeroAleatorio = 1;
while ($numeroAleatorio % 5 != 0) {
  $numeroAleatorio = rand();

  echo $a++ . " : " . $numeroAleatorio . '<br>';


}



 ?>
