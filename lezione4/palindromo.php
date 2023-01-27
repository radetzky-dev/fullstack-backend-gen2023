<?php

//array: pippo, mario, madam, osso,  ossesso, esose, computer

//funzione che mi dice se la parola è palindroma : tip: spulicare la doc delle stringhe

$words = ["pippo", "mario", "madam", "osso",  "ossesso", "esose", "computer"];

function checkPalindromo(string $myVal)
{
    if ($myVal == strrev($myVal)) {
        return true;
    }
    return false;
}

foreach ($words as $myVal) {
    echo "Is $myVal palindromo? <br>";
    echo  checkPalindromo($myVal) ? "Si<br>" : "No<br>";
}
