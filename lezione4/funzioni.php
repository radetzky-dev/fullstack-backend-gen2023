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
 * multipleMyMuber
 * Moltiplica un valore per un altro
 * @param  mixed $value
 * @param  mixed $motiplicator
 * @return int
 */
function multipleMyMuber(int $value, int $motiplicator = 2): int
{
    echo "$value moltiplicato per $motiplicator <br>";
    return $value * $motiplicator;
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

echo "<hr>";
echo multipleMyMuber($myVarStandard) . '<br>';
echo multipleMyMuber($myVarStandard, 3) . '<br>';
