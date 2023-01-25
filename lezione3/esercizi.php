<?php

/**
 * checkPosNeg
 *
 * @param  mixed $numero
 * @return void
 */
function checkPosNeg($numero)
{
    if ($numero >= 18) {
        echo "Il numero è positivo e puoi prendere la patente";
    } elseif ($numero < 0) {
        echo "il numero è negativo";
    } elseif ($numero < 18) {
     echo "Il numero è postivo";
    } else {
        echo "il numero è uguale a 0";
    }
}

$myNum = array(67, -3, 0, "Pietro", 11, 22.4, -13.2, "Guido", 0, 81);

//TODO se il numero è > 18 ed è un intero scrivi anche Puoi prendere la patente

foreach ($myNum as $key => $numero) {
    echo "Analizzo " . $numero . ": ";
    if (is_numeric($numero) && is_int($numero)) {
        checkPosNeg($numero);
    }
    echo "<br>";
}
