<?php

$values = array(false, true, null, 'abc', '23', 23, '23.5', 23.5, '', ' ', '0', 0);
foreach ($values as $value) {
    echo "is_string(";
    var_export($value);
    echo ") = ";
    echo var_dump(is_string($value));
    echo '<br>';
}

echo '<hr>';

$tests = array(
    "42",
    1337,
    0x539,
    02471,
    0b10100111001,
    1337e0,
    "0x539",
    "02471",
    "0b10100111001",
    "1337e0",
    "not numeric",
    array(),
    9.1,
    null,
    '',
);

foreach ($tests as $element) {
    if (is_numeric($element)) {
        echo var_export($element, true) . " is numeric", PHP_EOL;
    } else {
        echo var_export($element, true) . " is NOT numeric", PHP_EOL;
    }
    echo'<br>'; 
}

$num = 1337e0;
var_dump($num);

echo '<hr>';
$values = array(23, "23", 23.5, "23.5", null, true, false);
foreach ($values as $value) {
    echo "is_int(";
    var_export($value);
    echo ") = ";
    var_dump(is_int($value));
    echo '<br>';
}

echo '<hr>';

$data = array(1, 1., 3.56, NULL, new stdClass, 'foo', array("1","2"));

foreach ($data as $value) {
    echo gettype($value), "<br>";
}

echo '<br>';
$yes = array('this', 'is', 'an array');

echo is_array($yes) ? 'Array' : 'not an Array';
echo "<br>";

$no = 'this is a string';

echo is_array($no) ? 'Array' : 'not an Array';

echo '<hr>';
// array from our object
function get_students($obj)
{
    if (!is_object($obj)) {
        return false;
    }

    return $obj->students;
}

// Declare a new class instance and fill up 
// some values
$obj = new stdClass();
$obj->students = array('Kalle', 'Ross', 'Felipe');

var_dump(get_students(null));
var_dump(get_students($obj));

echo '<hr>';

$a = false;
$b = 1;

// Since $a is a boolean, it will return true
if (is_bool($a) === true) {
    echo "Yes, this is a boolean<br>";
}

// Since $b is not a boolean, it will return false
if (is_bool($b) === false) {
    echo "No, this is not a boolean<br>";
}

echo '<hr>';


$foo = NULL;
var_dump( is_null($foo));