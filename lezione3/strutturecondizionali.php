<?php
$a = 8;
$b = 8;

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

if ($a > $b) {
    echo "a is bigger than b";
} elseif ($a == $b) {
    echo "a is equal to b";
} else {
    echo "a is smaller than b";
}
echo '<br>';

if ($a > $b) :
    echo $a . " is greater than " . $b;
    bar();
    print_r("ciao");
elseif ($a == $b) : // Note the combination of the words.
    echo $a . " equals " . $b;
    echo 'egalité';
else :
    echo $a . " is neither greater than or equal to " . $b;
    echo "terzo caso";
endif;


echo '<br>';
$i = 5;
switch ($i) {
    case 0:
        echo "i equals 0";
        break;
    case 1:
        echo "i equals 1";
        break;
    case 2:
        echo "i equals 2";
        break;
    default:
        echo "nessuno di questi";
}

switch ($i) {
    case 0:
    case 1:
    case 2:
        echo "i is less than 3 but not negative";
        break;
    case 3:
        echo "i is 3";
        break;
    default:
        echo "nessuno di questi";
}


switch ($i) {
    case 0:
        echo "i equals 0";
        break;
    case 1:
        echo "i equals 1";
        break;
    case 2:
        echo "i equals 2";
        break;
    default:
       echo "i is not equal to 0, 1 or 2";
}
echo '<hr>';
$target = 1;
$start = 3;

switch ($target) {
    case $start - 1:
        print "A";
        break;
    case $start - 2:
        print "B";
        break;
    case $start - 3:
        print "C";
        break;
    case $start - 4:
        print "D";
        break;
}

echo '<hr>';

switch ($i):
    case 0:
        echo "i equals 0";
        break;
    case 1:
        echo "i equals 1";
        break;
    case 2:
        echo "i equals 2";
        break;
    default:
        echo "i is not equal to 0, 1 or 2";
endswitch;

echo '<hr>';
$beer = "stella";
switch($beer)
{
    case 'tuborg';
    case 'carlsberg';
    case 'stella';
    case 'heineken';
        echo 'Good choice';
        break;
    default;
        echo 'Please make a new selection...';
        break;
}