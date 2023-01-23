<?php

$myVal = 3;

$myStringVal ="3.9";

$transoformedVal = intval($myStringVal);

echo $transoformedVal;
echo '<hr>';
echo $myVal + $myStringVal;
echo '<hr>';
echo $myVal . $myStringVal;
echo '<hr>';

var_dump($myVal);
var_dump($myStringVal);
var_dump($transoformedVal);