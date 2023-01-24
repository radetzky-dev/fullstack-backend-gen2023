<?php

$a = 1;
$b = "1";
$c = 1.0;

var_dump($a == $b);
var_dump($a == $c);
var_dump($b == $c);
var_dump($a === $b);

$a = 9;
$b = 8;
//stampo a video i vriabili dichiarati
echo 'sono a ' . $a;
echo '<br>';
echo 'sono b ' . $b;
echo '<br>';

if ($a > $b) {
    echo "a is bigger than b<br>";
} else {
    echo "a is smaller than b<br>";
}