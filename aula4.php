<?php

echo "<pre>";

// Criar array com a função
// https://www.php.net/manual/pt_BR/function.array.php

$meuPrimeiroArray = array();
var_dump($meuPrimeiroArray);

// Arrays associativos são os que o índice é um string

$meuPrimeiroArray["Nome"] = "Yuri Sá";
var_dump($meuPrimeiroArray);

$meuPrimeiroArray["Tel"] = 119999999999;
$meuPrimeiroArray["Email"] = "yuri.sa2@etec.sp.gov.br";
$meuPrimeiroArray["About"] = "@yuri.sa";
$meuPrimeiroArray["SM"] = "@yurisa2";
var_dump($meuPrimeiroArray);


echo '<br>' .
      'O Nome do professor é: ' .
      $meuPrimeiroArray['Nome'];

echo '<br>';
echo '<br>';
echo '<br>';


// Arrays INDEXADOS

$meuSegundoArray = array();
$meuSegundoArray[0] = "Oi, tudo bem ae";
$meuSegundoArray[1] = "Tudo, e ae.";
var_dump($meuSegundoArray);

$meuSegundoArray[] = rand();
var_dump($meuSegundoArray);

$meuSegundoArray[] = rand();
$meuSegundoArray[] = rand();
$meuSegundoArray[] = rand();
$meuSegundoArray[] = rand();
$meuSegundoArray[] = rand();
$meuSegundoArray[] = rand();
$meuSegundoArray[] = rand();
$meuSegundoArray[] = rand();
$meuSegundoArray[] = rand();
$meuSegundoArray[] = rand();
$meuSegundoArray[] = rand();
$meuSegundoArray[] = rand();
var_dump($meuSegundoArray);

// REQUESTS

// GET
// https://www.php.net/manual/pt_BR/reserved.variables.get.php

var_dump($_GET);



 ?>
