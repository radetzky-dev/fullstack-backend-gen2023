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
var_dump($ages);