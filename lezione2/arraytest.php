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

var_dump($famiglia);

$famiglia["Verdi"] = "d"; //cancella Verdi e inserisce solo d