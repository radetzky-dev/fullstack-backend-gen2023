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