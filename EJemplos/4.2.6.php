<?php
$a = 3;
$b = 7;

$cadena = 'AB';
echo "Sean a = $a, b = $b y cadena = '$cadena'<br>";
$c = --$a + $b++;

echo "--a + b++ = $c<br>Con b = $b y a = $a<br>";

++$cadena;
echo "++cadena = $cadena";
?>