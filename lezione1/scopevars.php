<?php

$myVar = "hello";

function printMyName(string $name): void
{
    // echo $myVar;
    echo $name;
}

printMyName(
    $myVar
);
echo "Fuori " . $myVar."<br>";

echo "Name ".$name;
