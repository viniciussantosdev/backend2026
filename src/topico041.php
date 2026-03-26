<?php //operadores mstemáticos
$a=10;
$b=2;
echo "Adição:".($a + $b);//Adição: 12
echo "<br>Subtração:".($a - $b);//Subtração: 8
echo "<br>Multiplicação:".($a * $b);//20
echo "<br>Divisão:".($a / $b);//5
echo "<br>Módulo:".($a % $b);//0
echo "<br>Exponenciação:".($a ** $b);//100
?>

<hr>

<?php //operadores de atribuiçãoes
$a=10;
$b=2;
$a+=$b;
$b-=5;
echo "a = ".$a;
echo "<br>b = ".$b;
$c=11;
$d=6;
$c%=$d;
$d+=$a;
echo "<br>c = ".$c;
echo "<br>d = ".$d;

$nome = "Bete";
echo $nome.$d;
echo "<hr>";
$c.="cinco";
echo "<br> c = $c" ;
?>

<hr>

<?php //operação de String
$a = "Bete ";
echo "$a <br>";
$b = "Leo ";
echo "$b <br>";
echo $a . $b;
$b .= $a;
echo "<br>$b"; 
?>

<hr>

<?php //incremento e decremento
$x = 100;
echo "x = ".$x++;
echo "<br>x final = ".$x;
echo "<HR>";
$i = 10;
echo "i = $i";

$i++;
$i++;
++$i;
echo "<br> i = $i";
$i--;
--$i;
echo "<br> i = $i";
?>
