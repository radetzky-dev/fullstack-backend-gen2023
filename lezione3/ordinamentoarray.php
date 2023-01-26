<?php
$ar1 = array(10, 100, 100, 0);
$ar2 = array(1, 3, 2, 4);
echo "<pre>";
print_r($ar1);
echo "</pre>";
echo "<hr>";
echo "<pre>";
print_r($ar2);
echo "</pre>";
echo "<hr>";
echo "SORT<br>";

array_multisort($ar1, $ar2);

echo "<pre>";
print_r($ar1);
echo "</pre>";
echo "<hr>";
echo "<pre>";
print_r($ar2);
echo "</pre>";
echo "<hr>";

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple","f" => "01", "z" =>2, "k" => 1.5);
asort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val<br>";
}
echo "<hr>";
arsort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val<br>";
}
echo "<hr>";
ksort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val<br>";
}
echo "<hr>";
krsort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val<br>";
}

echo "<hr>";
$array1 = $array2 = array('IMG0.png', 'img12.png', 'imG7.png', 'img10.png', 'img2.png', 'img1.png', 'IMG3.png');

sort($array1);
echo "Standard sorting<br>";
echo "<pre>";
print_r($array1);
echo "</pre>";

natcasesort($array2);  //ignora il CASE
echo "\nNatural order sorting (case-insensitive)<br>";
echo "<pre>";
print_r($array2);
echo "</pre>";

natsort($array2);
echo "\nNatural order sorting\n";
echo "<pre>";
print_r($array2);
echo "</pre>";

echo "<hr>"; //ordina e sovrascrive indici
$fruits = array("lemon", "orange", "banana", "apple");
sort($fruits);
foreach ($fruits as $key => $val) {
    echo "fruits[" . $key . "] = " . $val . "<br>";
}
echo "<hr>";
rsort($fruits);
foreach ($fruits as $key => $val) {
    echo "fruits[" . $key . "] = " . $val . "<br>";
}

echo "<hr>";
function cmp($a, $b) {
	echo $a. " vs ". $b.'<br>';
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
}

// Array to be sorted
$array = array('a' => 4, 'b' => 8, 'c' => -1, 'd' => -9, 'e' => 2, 'f' => 5, 'g' => 3, 'h' => -4);
print_r($array);

// Sort and print the resulting array
uasort($array, 'cmp');
echo "<pre>";
print_r($array);
echo "</pre>";

function cmpk($a, $b)
{
    $a = preg_replace('@^(a|an|the) @', '', $a);
    $b = preg_replace('@^(a|an|the) @', '', $b);
    return strcasecmp($a, $b);
}

$a = array("John" => 1, "the Earth" => 2, "an apple" => 3, "a banana" => 4);

uksort($a, "cmpk");

foreach ($a as $key => $value) {
    echo "$key: $value<br>";
}