<?php
/*
This is a comment multi
lines
*/

// this is a single line comment

# another comment type
$name = "Paolo";
echo "Il mio nome è " . $name;


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
