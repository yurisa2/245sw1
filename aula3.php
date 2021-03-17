<?php
echo "<pre>";


$string1 = "Primeiros momentos da string";
$string2 = "Final da String";

var_dump($string1);
var_dump($string2);


// https://www.php.net/manual/pt_BR/language.operators.string.php
$concatenada = $string1 . $string2;
var_dump($concatenada);

$concatenada = $string1 . " - " . $string2;
var_dump($concatenada);

// https://www.php.net/manual/pt_BR/function.rand
$aleatorio1 = rand();
$aleatorio2 = rand();

$concatenada2 = "Aleatorio 1: " . $aleatorio1 . " | Aleatorio 2: " . $aleatorio2;
var_dump($concatenada2);

// Aspas simples e duplas e literalidade
// https://pt.stackoverflow.com/questions/4652/diferen%C3%A7a-entre-aspas-simples-e-duplas-em-php

echo "<a href=lipsum.txt>LINK</a>";

// O exemplo acima TEM que usar aspas, conforme doc https://developer.mozilla.org/pt-BR/docs/Web/HTML/Element/a

echo "<br>";

// Eu tenho 2 jeitos principais de resolver isso
// Usando aspas simples no PHP e Duplas no HTML
echo '<a href="lipsum.txt">LINK</a>';

echo "<br>";
// Strings com variáveis

$endLink = "lipsum.txt";
echo '<a href="' . $endLink . '">LINK COM VARIAVEL</a>';
echo "<br>";

$endLink = rand();
echo '<a href="' . $endLink . '">LINK COM VARIAVEL</a>';
echo "<br>";

$endLink = time();
echo '<a href="' . $endLink . '">LINK COM VARIAVEL</a>';
echo "<br>";

// A REAL diferença entre aspas simples e aspas duplas é que
// Aspas duplas PROCESSAM variáveis e simples não.

echo "A variavel endLink é $endLink";
echo '<br>';

// Mas não processa funções
echo "A variavel endLink é time()";
echo '<br>';

// As aspas SIMPLES não conseguem processar variáveis
echo 'A variavel endLink é $endLink';
echo '<br>';

// Existe um jeito de usar aspas duplas dentro de aspas duplas
// https://www.php.net/manual/pt_BR/regexp.reference.escape.php


//echo "<a href="lipsum.txt">LINK</a>"; // Esta sintaxe pode ser ESCAPEada
echo "<a href=\"lipsum.txt\">LINK</a>"; // Porem se eu adicionar \ funciona
echo '<br>';

echo '<br>';
echo '################# ARRAYS #################';
echo '<br>';
echo '<br>';
// Spoilers da proxima aula - Arrays
// https://www.php.net/manual/pt_BR/language.types.array.php


// Array Associativo

$array1 = array(
                'NOME' => 'Yuri Sá',
                'TEL' => 11999999999,
                'EMAIL' => 'yuri.sa2@etec.sp.gov.br'
);

var_dump($array1);

$string = "O nome do professor é: " . $array1["NOME"] . " | O Telefone é " . $array1["TEL"];
var_dump($string);

$array1["NOME"] = "WaYuri Sá";
$array1["TEL"] = 99111111111;
var_dump($array1);

// Arrays INDEXADOS
$array2 = array(
                0 => "oi",
                1 => "Tudo bem",
                3 => "e ae"

);
var_dump($array2);

$array2[] = "Tudo certo, é nóis";
var_dump($array2);

echo $array2[0] . $array2[1] . $array2[3];

?>
