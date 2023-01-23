<?php

$myVal = 3;

$myStringVal ="3.9";

$transoformedVal = intval($myStringVal);

echo floatval($myStringVal);
echo"<br>";
$transoformedValNew = round($myStringVal);

echo $transoformedVal;
echo '<hr>';
echo $myVal + $myStringVal;
echo '<hr>';
echo $myVal . $myStringVal;
echo '<hr>';
var_dump((int)8.1);

$x = 8 - 6.4; 

echo (int)$x;
var_dump($x);
var_dump($myVal);
var_dump($myStringVal);
var_dump($transoformedVal);
var_dump($transoformedValNew);

echo '<br>*<br>';
$show_separators = true;
if (!$show_separators) {
    echo "<hr>\n";
}