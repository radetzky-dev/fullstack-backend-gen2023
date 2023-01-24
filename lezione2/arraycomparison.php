<?php

$a = array("a" => "apple", "b" => "banana");
$b = array("a" => "pear", "b" => "strawberry", "c" => "cherry");

var_dump($a);
var_dump($b);
echo '<hr>';

$c = $a + $b; // Union of $a and $b
echo "Union a + b:";
var_dump($c);
echo '<hr>';

$c = $b + $a; // Union of $b and $a
echo "Union b + a:";
var_dump($c);
echo '<hr>';

$a += $b; // Union of $a += $b is $a and $b
echo "Union of a += b:";
var_dump($a);
echo '<hr>';