 Integer ultrices pellentesque ex, vitae porttitor sem vehicula bibendum. Duis fermentum libero non cursus varius. Integer at lacinia ligula. Aliquam ut vestibulum eros, at rutrum libero. In et erat risus. Etiam ac accumsan felis, in volutpat nisi. Sed nisl mi, placerat quis semper sit amet, consectetur ac risus. Proin augue lorem, auctor nec vestibulum eu, placerat ut ex. Fusce malesuada velit molestie, porttitor sem vitae, facilisis mauris.

<?php
// Report all PHP errors
error_reporting(E_ALL);
// https://www.php.net/manual/pt_BR/function.echo.php

echo "<pre>";

echo "<br>";
echo "isso eh uma string";
echo "<br>";
echo "<br>";

echo 1 + 1;

echo "<br>";

echo "######################################################<Br>";
echo "############# VARIAVEIS ###############<Br>";
echo "######################################################<Br>";

echo "<br>";
echo "<br>";

$variavel = "Isso eh uma string dentro de uma variavel";

echo $variavel;

echo "<br>";
echo "<br>";


$num1 = 1234;
$num2 = 4321;

echo $num1 + $num2;
echo "<br>";




// https://www.php.net/manual/pt_BR/function.var-dump.php

var_dump($variavel);
var_dump($num1);

echo "<br>";

echo "######################################################<Br>";
echo "############# Operadores Aritmeticos ###############<Br>";
echo "######################################################<Br>";

echo "<br>";

//https://www.php.net/manual/pt_BR/language.operators.arithmetic.php

$soma = $num1 + $num2;
var_dump($soma);

$subtracao = $num1 - $num2;
var_dump($subtracao);

$divisao = $num1 / $num2;
var_dump($divisao);

$multiplicacao = $num1 * $num2;
var_dump($multiplicacao);

$exponenciacao = $num1 ** 2;
var_dump($exponenciacao);

$mod = $num1 % $num2;
var_dump($mod);

$mod = 5 % 2; // Mod de 2 eh bom para ver se eh par ou impar
var_dump($mod);

//https://www.php.net/manual/pt_BR/function.sqrt
$raiz = sqrt($num1);
var_dump($raiz);


$expressao = $num1 / (3 * $num2);
var_dump($expressao);


 ?>
