<?php
$a = array("a" => "apple", "b" => "banana");
$b = array("c" => "apple", "d" => "banana");
$c = $a + $b;
echo "Union a + b:";
var_dump($c);
echo '<hr>';


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

$a = array("apple", "banana");
$b = array(1 => "banana", "0" => "apple");
$c = array(1 => "banana", 0 => "apple");
$d = array(0 => "apple", 1 => "banana");
$e = array("mela" => "apple", "ban" => "banana");

echo $a[0]. ' vs '. $d[0].'<br>';

echo $b['0'].'<br>';

echo $e['mela'].'<br>';
echo $e['ban'].'<br>';

var_dump($a);
echo '<hr>';
var_dump($b);
echo '<hr>';
var_dump($c);
echo '<hr>';
var_dump($d);

echo '<hr>';

var_dump($a == $b); // bool(true)
var_dump($a === $b); // bool(false)
echo '<hr>';
var_dump($a === $d); //true