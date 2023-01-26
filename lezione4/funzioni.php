<?php

$myVar =1;

function doubleValue (int &$value):void
{
    $value = $value *2;
  
}

echo $myVar."<br>";
doubleValue($myVar);
echo $myVar."<br>";