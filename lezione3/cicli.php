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

for ($i = 0; round($i, 1) <= 2; $i += 0.1)
    echo $i . ",";
echo "<hr>";

$array = array(
    'pop0',
    'pop1',
    'pop2',
    'pop3',
    'pop4',
    'pop5',
    'pop6',
    'pop7',
    'pop8'
);
echo "Tot Before: " . count($array) . "<br><br>";
for ($i = 0; $i < count($array); $i++) {
    if ($i === 3) {
        unset($array[$i]);
    }
    echo "Count: " . count($array) . " - Position: " . $i . "<br>";
}
echo "<br> Tot After: " . count($array) . "<br>";
print_r($array);

echo "<hr>";
$array = array(0 => "a", 1 => "b", 2 => "c", 3 => "d");

for ($i = 0; $i < count($array); $i++) {
    echo $array[$i];
    unset($array[$i]);
}

print_r($array);

echo "<hr>";
$arr = array(1, 2, 3, 4);
foreach ($arr as &$value) {  //modifica e chiama la referenza diretta ai valori
    $value = $value * 2;
}
unset($value);
print_r($arr);

echo "<hr>";
$arr = array(1, "g", 3, 4);
foreach ($arr as $value) {  //solo il valore
    echo $value . '<br>';
}

foreach ($arr as $chiave => $valore) {  //la chiave e il valore
    echo $chiave . ') ' . $valore . '<br>';
}

echo "<hr>";
$a = array(
    "one" => 1,
    "two" => 2,
    "three" => 3,
    "seventeen" => 17
);

foreach ($a as $k => $v) {
    echo "\$a[$k] => $v.\n";
}

echo "<hr>";
$array = [
    [1, 2],
    [3, 4],
];

foreach ($array as list($a, $b)) {
    // $a contains the first element of the nested array,
    // and $b contains the second element.
    echo "A: $a; B: $b\n";
}

echo "<br>";
$catalogo = [
    ["pesce", 22.55, "OCEANO"],
    ["carne", 43.5, "FATTORIA"],
    ["olio", 12.5, "CARLI"]
];

foreach ($catalogo as list($prodotto, $prezzo, $marca)) {
    // $a contains the first element of the nested array,
    // and $b contains the second element.
    echo $prodotto . " " . $prezzo . " " . $marca . "<br>";
}

echo "<br>";
foreach ($catalogo as [$a, $b, $c]) {
    var_dump($a);
    echo "A: $a; B: $b\n C: $c <br>";
}

echo "<br>";
$stack = array('first', 'second', 'third', 'fourth', 'fifth');

foreach ($stack as $v) {

    if ($v == 'second') continue;

    if ($v == 'fourth') break;

    echo $v . '<br>';
}
