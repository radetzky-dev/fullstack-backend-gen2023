<?php

/**
 * checkPosNeg
 *
 * @param  mixed $numero
 * @return void
 */
function checkPosNeg($numero)
{
    if ($numero > 0) {
        echo "il numero è positivo";
    } elseif ($numero < 0) {
        echo "il numero è negativo";
    } else {
        echo "il numero è uguale a 0";
    }
}

$myNum = array(67, -3, 0, "Pietro", 11, 22.4, -13.2, "Guido", 0, 81);

//TODO se il numero è > 18 ed è un intero scrivi anche Puoi prendere la patente

foreach ($myNum as $key => $numero) {
    echo "Analizzo " . $numero . ": ";
    if (is_numeric($numero)) {
        checkPosNeg($numero);
    }
    echo "<br>";
}
