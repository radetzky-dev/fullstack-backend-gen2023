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
 * print_my_name
 *
 * @param  mixed $name
 * @return void
 */
function printMyName($name)
{
    echo "<strong>Ciao " . $name . "!</strong>";
}
printMyName($name);
