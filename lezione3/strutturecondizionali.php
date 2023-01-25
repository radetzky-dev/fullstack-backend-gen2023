<?php
$a = 8;
$b = 7;

function bar()
{
    echo 'hello bar!<br>';
}

if ($a > $b)
    echo "a is bigger than b";
echo '<hr>';
if ($a > $b) {
    echo "a is bigger than b";
}
echo '<hr>';

if ($a > $b) {
    echo "$a is greater than $b";
} else {
    echo "$a is NOT greater than $b";
}
echo '<hr>';

if ($b == 3) bar();

echo '<hr>';

$v = 1;

$r = (1 == $v) ? 'Yes' : 'No'; // $r is set to 'Yes'
$r = (3 == $v) ? 'Yes' : 'No'; // $r is set to 'No'

echo (1 == $v) ? 'Yes' : 'No'; // 'Yes' will be printed

echo '<hr>';

$t = date("H");

if ($t < "10") {
    echo "Buon giorno";
} elseif ($t < "11") {
    echo "è l'ora del caffè<br>";
} elseif ($t > "12" && $t < "14") {
    echo "Buon pranzo<br>";
} elseif ($t < "19") {
    echo "Pomeriggio<br>";
} else {
    echo "Buona serata!";
}

echo '<hr>';
