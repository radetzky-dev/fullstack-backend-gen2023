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

echo "<hr>";

/**
 * showAsterisk
 *
 * @param  mixed $num
 * @return void
 */
function showAsterisk($num)
{
    $result = "";
    for ($i = 1; $i <= $num; $i++) {
        $result = $result . '*';
    }
    return $result;
}

for ($i = 1; $i <= 10; $i++) {
    echo showAsterisk($i) . "<br>";
}

echo "<hr>";
function showCars($cars)
{
    foreach ($cars as $value) {  //solo il valore
        echo "Marca : ". ucfirst($value) . '<br>';
    }
    echo "<hr>";
}

$cars = ["audi","fiat","mercedes", "ferrari","auto" => "mini"];
showCars($cars);
$cars[] ="Bentley";
showCars($cars);
unset($cars[0]);
unset($cars[2]);
$cars[] ="Lancia";
unset($cars["auto"]);

echo "<pre>";
print_r($cars);
echo "</pre>";

showCars($cars);

