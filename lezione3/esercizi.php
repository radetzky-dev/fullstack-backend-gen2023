<?php

//array con una serie di numeri 67, -3, 0, "pietro", 11

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

$myNum = array(67, -3, 0, "Pietro", 11);

foreach ($myNum as $key => $numero) {
    echo "Analizzo " . $numero . ": ";
    checkNumber($numero);
    echo "<br>";
}