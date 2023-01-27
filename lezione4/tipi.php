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
    echo '<br>';
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

$data = array(1, 1., 3.56, NULL, new stdClass, 'foo', array("1", "2"));

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
var_dump(is_null($foo));

echo "<hr>";
function someFunction()
{
    echo "hello1";
}

$functionVariable = 'someFunction';
var_dump(is_callable($functionVariable, false, $callable_name));  // bool(true)

echo $callable_name, "<br>";  // someFunction

//
//  Array containing a method
//

class TestClass
{
    public function someMethod()
    {
        echo 'hello2';
    }
}

echo '1 ';
var_dump(method_exists('TestClass', 'someMethod'));
echo '<hr>';
echo '2 ';
var_dump(method_exists('TestClass', 'testNot'));
echo '<hr>';

$anObject = new TestClass();
$methodVariable = array($anObject, 'someMethod');
var_dump(is_callable($methodVariable, true, $callable_name));  //  bool(true)
echo $callable_name, "<br>";  //  testClass::someMethod

echo '<hr>';

class Foo
{
    public function __construct()
    {
    }
    public function foo()
    {
    }
}

var_dump(
    is_callable(array('Foo', '__construct')),
    is_callable(array('Foo', 'foo'))
);


echo '<hr>';
var_dump(is_countable([1, 2, 3])); // bool(true)
var_dump(is_countable(new ArrayIterator(['foo', 'bar', 'baz']))); // bool(true)
var_dump(is_countable(new ArrayIterator())); // bool(true)
var_dump(is_countable(new stdClass())); // bool(false)


echo '<hr>';

var_dump(is_iterable([1, 2, 3]));  // bool(true)
var_dump(is_iterable(new ArrayIterator([1, 2, 3])));  // bool(true)
var_dump(is_iterable((function () {
    yield 1;
})()));  // bool(true)
var_dump(is_iterable(1));  // bool(false)
var_dump(is_iterable(new stdClass()));  // bool(false)

echo '<hr>';
function show_var($var)
{
    if (is_scalar($var)) {
        echo $var . ' OK <br>';
    } else {
        var_dump($var);
        echo ' NON OK<br>';
    }
}
$pi = 3.1416;
$proteins = array("hemoglobin", "cytochrome c oxidase", "ferredoxin");

show_var($pi);
echo '<br>';
show_var($proteins);
echo '<br>';

echo '<hr>';

echo '0:        ' . (boolval(0) ? 'true' : 'false') . "<br>";
echo '-13:        ' . (boolval(-13) ? 'true' : 'false') . "<br>";
echo '3:        ' . (boolval(3) ? 'true' : 'false') . "<br>";
echo '7:        ' . (boolval(7) ? 'true' : 'false') . "<br>";


echo '<hr>';
class StrValTest
{
    public function __toString()
    {
        return __CLASS__;
    }
}

// Prints 'StrValTest'
echo strval(new StrValTest);

echo '<hr>';

class FooD
{
    public function name()
    {
        echo "My name is ", get_class($this), "<br>";
    }
}

// create an object
$bar = new FooD();

// external call
echo "Its name is ", get_class($bar), "<br>";

// internal call
$bar->name();

echo '<hr>';
$foo = "5bar"; // string
$bar = true;   // boolean
$nobar = false;

$pounds = "51.5 l"; // string
settype($pounds, "float");
var_dump($pounds);

settype($foo, "integer"); // $foo is now 5   (integer)
settype($bar, "string");  // $bar is now "1" (string)
settype($nobar, "string");
var_dump($nobar);

$pounds = "51.5 l";
$p2 = (float) $pounds;
echo $p2."<br>";

$foo = "5bar";
$p2 = (integer) $foo;
echo $p2."<br>";
