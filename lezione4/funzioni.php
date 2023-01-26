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


echo "<hr>";

function readFileTest()
{
    $numargs = func_num_args();
    echo "Number of arguments: $numargs<br>";
    $arglist = func_get_args();
    for ($i = 0; $i < $numargs; $i++) {
        echo "Argument $i is: " . $arglist[$i] . "<br>";
    }

    echo "<hr>";
    if ($numargs == 0) {
        echo "Nessuna operazione eseguita<br>";
    } else {
        if ($numargs >= 1) {
            echo "First argument is  " . func_get_arg(0) . "  Read and save file<br>";
        }
        if ($numargs >= 2) {
            echo "Second argument is: " . func_get_arg(1) . " Mostro lista parametri di aiuto<br>";
        }
        if ($numargs >= 3) {
            echo "Terzo argomento is: " . func_get_arg(2) . " Invio una mail<br>";
        }
    }
}

function callAnotherFunc(callable $myFunc, string $firstParam)
{
    if ($myFunc !== null) {
        $myFunc($firstParam);
    }
}

echo "<br>*****<br>";
callAnotherFunc("readFileTest", "primo parametro");
echo "<br>*****<br>";

readFileTest("nomefile.txt", "help", "pippo@mail.com");
echo "<hr>";
readFileTest("nomefile.txt", "help");
echo "<hr>";
readFileTest("nomefile.txt");
echo "<hr>";
readFileTest();
echo "<hr>";
readFileTest("nomefile.txt", "help", "pippo@mail.com", "xxx", "yyy");
echo "<hr>";

echo "<br>** xxxx xxx ***<br>";

/**
 * getMoreVars
 *
 * @param  mixed $value
 * @return array
 */
function getMoreVars(int $value): array
{
    $value++;
    return array('coffee', 'brown', 'caffeine', $value, array("a",$value));
}

list($drink, $color, $power, $newValue, $newArray) = getMoreVars(4);
echo "$drink is $color and $power and $newValue makes it special!<br>";

var_dump($newArray);
