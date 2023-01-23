<?php
/*
This is a comment multi
lines
*/

// this is a single line comment

# another comment type
$name = "Paolo";
echo "Il mio nome è " . $name."<br>";


/**
 * Stampa il nome
 * @param  mixed $name
 * @return void
 */
function printMyName(string $name) : void
{
    echo "<strong>Ciao " . $name . "!</strong>";
}
printMyName($name);

/**
 * Ritorna la somma di due interi
 *
 * @param  mixed $a
 * @param  mixed $b
 * @return int
 */
function somma(int $a, int $b) : int
{
    return $a + $b;
}

echo "<br>Somma: ".somma(3, 5);