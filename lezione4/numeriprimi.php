<?php
//TROVARE numeri primi fra 1 e 100 e stamparli
//Numero primo è
// >1
//può essere diviso solo per se stesso

//TIP : $a % $b Modulo

function checkIsPrime($number)
{
    if ($number == 1) {
        return "NO";
    }
    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i == 0)
            return "NO";
    }
    return "SI";
}


for ($i = 1; $i < 101; $i++) {
    echo "Controllo se $i è primo " . checkIsPrime($i) . "<br>";
}
