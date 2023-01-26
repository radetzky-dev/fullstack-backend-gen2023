<?php

$a[0] = 1;
$a[1] = 3;
$a[2] = 5;
var_dump(count($a));

$food = array(
    'fruits' => array('orange', 'banana', 'apple'),
    'veggie' => array('carrot', 'collard', 'pea')
);

// recursive count
var_dump(count($food, COUNT_RECURSIVE));

// normal count
var_dump(count($food));

$os = array("Mac", "NT", "Irix", "Linux");
if (in_array("Irix", $os)) {
    echo "Got Irix";
}
if (in_array("mac", $os)) {  //case sensitive NON lo trova
    echo "Got mac";
}

echo '<hr>';

$a = array('1.10', 12.4, 1.13, 16);

if (in_array('12.4', $a, false)) {
    echo "'12.4' found with strict check\n";  //NON LO TROVA se è true
}

if (in_array(1.13, $a, true)) {
    echo "1.13 found with strict check\n";
}

echo "<hr>";

$a = array(array('p', 'h'), array('p', 'r'), 'o');


if (in_array(array('p', 'h'), $a)) {
    echo "'ph' was found<br>";
}

if (in_array(array('f', 'i'), $a)) {
    echo "'fi' was found\n";
}

if (in_array('o', $a)) {
    echo "'o' was found<br>";
}

//dice se esiste elemento
$anagrafica = array(array('mario', 'rossi'), array('maria', 'verdi'), 'o');

if (in_array(array('mario', 'rossi'), $anagrafica)) {
    echo "'mario rossi' was found<br>";
}

echo "<hr>";
//dice se esiste la chiave
$search_array = array('first' => 1, 'second' => 4);
if (array_key_exists('first', $search_array)) {
    echo "The 'first' element is in the array";
}

echo '<hr>';

//SERVE PER LE CHIAVI
$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');

$key = array_search('green', $array); // $key = 2;
echo $key . '<br>';
$key = array_search('red', $array);   // $key = 1;
echo $key . '<br>';

echo '<hr>';
//Ritrona elenco delle keys
$array = array(0 => 100, "color" => "red");
print_r(array_keys($array));

$array = array("blue", "red", "green", "blue", "blue");
print_r(array_keys($array, "blue"));

echo "<hr>";
$array = array(
    "color" => array("blue", "red", "green"),
    "size"  => array("small", "medium", "large")
);
print_r(array_keys($array));

echo "<hr>";

$var = "";

// This will evaluate to TRUE so the text will be printed.
if (isset($var)) {
    echo "1This var is set so I will print.";
}

unset($var);

if (isset($var)) {
    echo "2This var is set so I will print.";
}

echo "<hr>";

$a = array('test' => 1, 'hello' => NULL, 'pie' => array('a' => 'apple'));

var_dump(isset($a['test']));            // TRUE
var_dump(isset($a['foo']));             // FALSE
var_dump(isset($a['hello']));           //FALSE

echo '<hr>';

foreach (range(0, 12) as $number) {
    echo $number;
}

echo '<hr>';
// The step parameter 5

foreach (range(0, 100, 5) as $number) {
    echo $number . '-';
}

echo "<hr>";

foreach (range('a', 'z') as $letter) {
    echo $letter . '-';
}

echo "<hr>";


$numbers = range(1, 20);
shuffle($numbers);
foreach ($numbers as $number) {
    echo "$number -";
}

echo "<hr>";

$input  = array("uno", "due", "tre", "quattro");
$reversed = array_reverse($input);
$preserved = array_reverse($input, true);

print_r($input);
echo "<hr>";
print_r($reversed);
echo "<hr>";
print_r($preserved);
echo "<hr>";

$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);
echo "<hr>";

$array1 = array("pipp" => 1, 2, 3);
$array2 = array(4, 5, "pipp" => 6);
$result = array_merge($array1, $array2);
print_r($result);
echo "<hr>";

$input = array("a", "b", "c", "d", "e");

$output = array_slice($input, 2);      // returns "c", "d", and "e"
$output = array_slice($input, -2, 1);  // returns "d"
$output = array_slice($input, 0, 3);   // returns "a", "b", and "c"

// note the differences in the array keys
echo "<hr>";
print_r(array_slice($input, 2, -1));

echo "<hr>";
print_r(array_slice($input, 2, -1, true));

echo "<hr>";
$array = array("size" => "XL", "color" => "gold");
print_r(array_values($array));

echo "<hr>";
$input_array = array('a', 'b', 'c', 'd', 'e');
print_r(array_chunk($input_array, 2));

echo "<hr>";
$input_array = array('a', 'b', 'c', 'd', 'e', 'f','7','8','9','7','8','x');
$num = count($input_array);
$parts = $num % 3;

if ($parts != 0) {
    echo "Numero non divisibile per 3";
} else {
    $parts = $num / 3;
    $chunks = array_chunk($input_array, $parts);
    echo "<pre>";
    print_r($chunks);
    echo "</pre>";
}
