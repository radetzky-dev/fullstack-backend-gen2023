<?php

$a = 1;
$b = "1";
$c = 1.0;

var_dump($a == $b);
var_dump($a == $c);
var_dump($b == $c);
var_dump($a === $b);

$a = 9;
$b = 8;
//stampo a video i vriabili dichiarati
echo 'sono a ' . $a;
echo '<br>';
echo 'sono b ' . $b;
echo '<br>';

if ($a > $b) {
    echo "a is bigger than b<br>";
} else {
    echo "a is smaller than b<br>";
}

$a = 8;
$b = 8.00;
//ciclo per il confronto
if ($a === $b) {
    echo "a is equal b <br>";
} else {
    echo "a is not equal to b<br>";
}

echo '<br>TEST TASSE<br>';
function haiPagatoLeTasse(String $nome)
{
    //todo controlli databese
    //elaborazioni
    $risultato = true;
    return $risultato;
}

function haiPresentatoUnico(String $nome)
{
    //todo controlli databese
    //elaborazioni
    $risultato = true;
    return $risultato;
}

$userName = 'mio nome';
if (haiPresentatoUnico($userName) && haiPagatoLeTasse($userName)) {
    echo 'Complimenti hai pagato le tasse';
    //spedisco mail monopattino
} else {
    echo 'Devi rimetterti in regola!';
}


echo '<hr>';
echo "<h3>Postincrement</h3>";
$a = 5;
echo "Should be 5: " . $a++ . "<br />\n";
echo "Should be 6: " . $a . "<br />\n";

echo "<h3>Preincrement</h3>";
$a = 5;
echo "Should be 6: " . ++$a . "<br />\n";
echo "Should be 6: " . $a . "<br />\n";

echo "<h3>Postdecrement</h3>";
$a = 5;
echo "Should be 5: " . $a-- . "<br />\n";
echo "Should be 4: " . $a . "<br />\n";

echo "<h3>Predecrement</h3>";
$a = 5;
echo "Should be 4: " . --$a . "<br />\n";
echo "Should be 4: " . $a . "<br />\n";
