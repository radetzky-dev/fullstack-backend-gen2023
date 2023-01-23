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
 * printMyName
 *
 * @param  mixed $name
 * @return void
 */
function printMyName(string $name) : void
{
    echo "<strong>Ciao " . $name . "!</strong>";
}
printMyName($name);

/**
 * somma
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