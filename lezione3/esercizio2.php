<?php

$n = 30;
$i = 0;
$sum = 0;

//calculating sum from 1 to n
while ($i <= $n) {
    echo "Sommo $i <br>";
    $sum += $i;
    $i++;
}
echo "Totale $sum <br>";

echo "<hr>";
$somma = 0;

for ($i = 0; $i <= 30; $i++) {
    $somma += $i;
}
echo $somma;
