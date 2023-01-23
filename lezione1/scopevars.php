<?php

$myVar = "hello";

function printMyName(string $name): void
{
    echo $name;
}

printMyName(
    $myVar
);
echo "Fuori " . $myVar."<br>";

/**
 * testStaticScope
 *
 * @return void
 */
function testStaticScope() : void
{
    static $counter = 0;
    echo $counter."<br>";
    $counter++;
}

testStaticScope();
testStaticScope();
testStaticScope();