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

$username = "";
$messaggio = "Ciao " . ($username ? $username : 'utente');

echo $messaggio.'<br>';

$eta = 19;
$esame_superato = false;

$patente = ($eta >= 18) ? ($esame_superato ? true : false) : false;

if ($patente)
{
    echo "Complimenti puoi guidare l'auto!<br>";
} else
{
    echo "Peccato, continua a prendere il bus<br>";
}