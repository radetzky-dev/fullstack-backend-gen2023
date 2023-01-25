<?php
$eta = 19;

function canDrink()
{
    echo 'Puoi bere!<br>';
    return true;
}

function cantDrink()
{
    echo 'Non puoi bere!<br>';
    return false;
}

$maggiorenne = ($eta >= 18) ? true : false;
if ($maggiorenne) {
    echo 'Puoi bere!<br>';
}

$eta = 19;
$maggiorenne = ($eta >= 18) ? canDrink(): cantDrink();

if ($maggiorenne) {
    echo 'Puoi prendere la patente!<br>';
}

