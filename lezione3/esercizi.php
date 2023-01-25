<?php

/**
 * checkNumber
 *
 * @param  mixed $numero
 * @return void
 */
function checkNumber($numero)
{
    if (is_numeric($numero)) {
        if ($numero > 0) {
            echo "il numero è positivo";
        } elseif ($numero < 0) {
            echo "il numero è negativo";
        } else {
            echo "il numero è uguale a 0";
        }
    } else {
        echo "Non è un numero!";
    }
}

$myNum = array(67, -3, 0, "Pietro", 11,22.4, -13.2, "Guido", 0, 81);

foreach ($myNum as $key => $numero) {
    echo "Analizzo " . $numero . ": ";
    checkNumber($numero);
    echo "<br>";
}