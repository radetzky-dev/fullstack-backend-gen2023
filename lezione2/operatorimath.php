<?php

//esempi operatori aritmetici
$a = 5;
$b = 7;
$numFloat = 7.25;

echo 'Le mie varibili<br>';
echo "a = $a  e b = $b <br><hr>";
echo 'a = ' . $a . '  e b = ' . $b . '<br><hr>';
echo '<br>Somma<br>';
echo $a + $b+$numFloat;
echo '<br>Sottrazione<br>';
echo $a - $b-$numFloat;
echo '<br>Moltiplicazione<br>';
echo $a * $b;
echo '<br>Divisione<br>';
echo $a / $b+$numFloat;

echo '<br>Modulo (resto) <br>';
echo 5 % 3;
echo '<br>';
echo 4 % 2;
echo '<br>Incremento<br>';
$a++;
$b++;
echo "a = $a  e b = $b <br><hr>";
echo '<br>Sottraggo<br>';
$a--;
$b--;
echo "a = $a  e b = $b <br><hr>";