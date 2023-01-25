<?php

$i = 1;
while ($i <= 10) {
    echo $i++;  /* the printed value would be
                   $i before the increment
                   (post-increment) */
}

echo '<br>';
/* example 2 */

$i = 1;
while ($i <= 10) :
    echo $i;
    $i++;
endwhile;

echo '<br>';

$i = 0;
do {
    echo $i;
} while ($i > 0);

echo "<br>";

$i = 1;
do {
    echo ++$i;
    if ($i > 5) {
        echo "i is big enough";
        break;
    }
} while (true);

echo "<br>";
$x = 1;

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);

echo "<hr>";

for ($i = 1; $i <= 10; $i++) {
    echo $i;
}
echo "<hr>";

for ($i = 1; $i <= 10; $i = $i + 2) {
    echo $i;
}
echo "<hr>";

for ($i = 1;; $i++) {
    if ($i > 7) {
        break;
    }
    echo $i;
}

echo "<br>";

$people = array(
    array('name' => 'Kalle', 'salt' => 856412),
    array('name' => 'Pierre', 'salt' => 215863),
    array('name' => 'Paul', 'salt' => 11112)
);

print_r($people);
echo "<br>";
for ($i = 0; $i < count($people); ++$i) {
    echo $i . '<br>';
    $people[$i]['salt'] = mt_rand(1, 100);
    echo $people[$i]['name'] . '<br>';
}
echo "<hr>";
var_dump($people);
echo "<hr>";
for ($i = count($people) - 1; $i >= 0; --$i) {
    echo $i . '<br>';
    $people[$i]['salt'] = mt_rand(1, 100);
    echo $people[$i]['name'] . '<br>';
}
echo "<hr>";
var_dump($people);
