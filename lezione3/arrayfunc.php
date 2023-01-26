<?php

$a[0] = 1;
$a[1] = 3;
$a[2] = 5;
var_dump(count($a));

$food = array('fruits' => array('orange', 'banana', 'apple'),
              'veggie' => array('carrot', 'collard', 'pea'));

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