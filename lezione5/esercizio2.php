<?php

date_default_timezone_set("Europe/Rome");
echo 'Current time: ' . date('d-m-Y H:i') . "<hr>";
echo "ESERCIZIO 2<br>";

/**
 * getCopyright
 *
 * @param  mixed $myCompany
 * @return string
 */
function getCopyright(string $myCompany): string
{
    $year = date('Y', time());
    return "Copyright {$year}  © {$myCompany} ";
}
echo getCopyright("Musa spa");