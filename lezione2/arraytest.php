<?php

//Array con indici numerici
$cars = array ("ferrari","audi","bmw");
$cars[4] = "toyota";
$cars[] ="mercedes";
var_dump($cars);

echo '<hr>';
//Array associativo
$ages = array ("Mario" => 32,"Elena" => 27, "Guido" => 29);
$ages["Pietro"] = 81;
$ages[] = "Paolo";
$ages["Maria"] = "16";
$ages[] = 9;
$ages[2] = 20;

var_dump($ages);

echo '<hr>';
//Array multidimensionali
$famiglia = array (
    "Rossi" => array ("1","2","3"),
    "Verdi" => array ("A","b","c"),
);

$famiglia["Gialli"] = array ("A","b","c");
$famiglia[] = 14;
$famiglia["Verdi"][] = "d";
$famiglia["Gialli"][] = "d";
$famiglia[4][] = "elementoA";
$famiglia[4][] = "elementoB";
$famiglia[] = 15;
$famiglia[3] =" questo è tre";
$famiglia[] =" questo è il 6";

var_dump($famiglia);echo '<hr>';
echo "Stampo Gialli<br>";
var_dump($famiglia["Gialli"]);
echo '<hr>';
echo "Stampo Verdi<br>";
var_dump($famiglia["Verdi"]);
echo '<hr>';
echo "Stampo 4<br>";
var_dump($famiglia[4]);
echo '<hr>';

$famiglia["Verdi"] = "d"; //cancella Verdi e inserisce solo d

echo '<hr>';
$annidato = array (
    "Rossi" => array ("1","2","3"),
    "Verdi" => array ("A","b","c"),
);

$annidato["Rossi"]["secondoLivello"] = array ("1","2",3);
$annidato["Rossi"]["secondoLivello"]["terzoLivello"] = array ("A","B","C");

var_dump($annidato["Rossi"]);

//modi diversi di creare Array
$array = array(
    "foo" => "bar",
    "bar" => "foo",
);

// Using the short array syntax
$array = [
    "foo" => "bar",
    "bar" => "foo",
];

$array = array(
    "foo" => "bar",
    42    => 24,
    "multi" => array(
         "dimensional" => array(
             "array" => "foo",
             "pippo" => "eccomi"
         )
    )
);

var_dump($array["foo"]);
var_dump($array[42]);
var_dump($array["multi"]["dimensional"]["array"]);
var_dump($array["multi"]["dimensional"]["pippo"]);

echo '<hr>';

// Create a simple array.
$array = array(1, 2, 3, 4, 5);
print_r($array);
echo '<hr>';
// Now delete every item, but leave the array itself intact:
foreach ($array as $i => $value) {
    unset($array[$i]);
}
print_r($array);
echo '<hr>';
// Append an item (note that the new key is 5, instead of 0).
$array[] = 6;
print_r($array);
echo '<hr>';
// Re-index:
$array = array_values($array);
$array[] = 7;
print_r($array);