<?php
$a=10; //a = int
$b="10"; //b = string
echo "Igualdade = ".($a==$b)."<br>";
echo "Idêntico = ".($a===$b)."<br>";
echo "Não igual = ".($a!=$b)."<br>";
echo "Não Idêntico = ".($a!==$b)."<br>";
echo "<hr>";
$c = 20;
$d = 40;
$c = 20;
?>

<?php

$a = "10"; // a = "10" (string)
$b = "10"; // b = "10" (string)

// Comparações
echo "Igualdade = " . ($a == $b) . "<br>";      // true
echo "Idêntico = " . ($a === $b) . "<br>";     // true
echo "Não igual = " . ($a != $b) . "<br>";     // false
echo "Não Idêntico = " . ($a !== $b) . "<br>"; // false

echo "<hr>";

// Variáveis numéricas
$c = 20;
$d = 40;
$e = 500;

// Operadores lógicos
$f = !($c > $d); // false
var_dump($f);

$g = ($c < $e) && !($e > 1000); // true
var_dump($g);

$f = ($c < $e) && ($e > 1000); // false
var_dump($f);
echo "<hr>";
$a = 50;
$b = 120;
$c = 200;
$d =($a<=$b) ? "OK" : "Só que não";
$e = !($a<=$b) ? "Blz" : "Zoado";
echo "d = $d<br>e = $e";

/*
=   -> atribuição (receber valor)
==  -> igualdade (mesmo valor)
=== -> idêntico (mesmo valor e mesmo tipo)
*/

?>