<?php

//concatena due stringhe

//fai una somma fra una float e un int

//somma fra int e stringa

//scrivi una condizione vera che richiama una funzione per stampare il tuo nome

//scrivi i commenti

//concatena due stringhe
$myName = "Alessia";
$mySurName = "Grande";

echo $myName ." " . $mySurName;

//fai una somma fra una float e un int


echo"<br>";
$myVal = 3;
$myFloat = 5.89;

echo $myVal . $myFloat;



//somma fra int e stringa
echo"<br>";
$myNum = 8;
$myString = "4";

echo $myNum + $myString;

//scrivi una condizione vera che richiama una funzione per stampare il tuo nome
echo"<br>";
$myNamePrint = true;
if ($myNamePrint) {
    echo "Ciao " .$myName;
}