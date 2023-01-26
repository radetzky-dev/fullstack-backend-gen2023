<?php

$myVar = 1;
$myVarStandard = 2;

/**
 * doubleValueStandard standard
 *
 * @param  mixed $value
 * @return int
 */
function doubleValueStandard(int $value): int
{
    return $value * 2;
}



/**
 * doubleValue by reference
 *
 * @param  mixed $value
 * @return void
 */
function doubleValue(int &$value): void
{
    $value = $value * 2;
}

echo "Ref " . $myVar . "<br>";
echo "Stand " . $myVarStandard . "<br>";
doubleValue($myVar);
echo "Ref " . $myVar . "<br>";
$myVarStandard = doubleValueStandard($myVarStandard);
echo "Stand " . $myVarStandard . "<br>";
