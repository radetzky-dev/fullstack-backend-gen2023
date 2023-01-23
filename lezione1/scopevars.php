<?php

$myVar = "hello";

function printMyName(string $name): void
{
    echo $name;
}

printMyName(
    $myVar
);


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
echo "Fuori " . $myVar."<br>";
testStaticScope();


$varEsterna = 10;
/**
 * sum
 *
 * @param  mixed $b
 * @return void
 */
function sum($b)
{
    global $myVar;
    global $varEsterna;  //vede la var esterna
    echo $myVar;
    return $varEsterna + $b;
}
echo sum(5);