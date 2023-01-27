<?php
//Tutti le abbreviazioni per le date https://www.php.net/manual/en/datetimeimmutable.createfromformat.php

//Tutti i formati data
//https://www.php.net/manual/en/datetime.formats.date.php

//Dateinterval format
//https://www.php.net/manual/en/dateinterval.format.php

$Now = new DateTime('now', new DateTimeZone('Europe/Rome'));
echo  "A Roma sono le :" . $Now->format('d-m-Y');
echo '<br>';

$date = DateTime::createFromFormat('d-M-Y', '1-Feb-2009');
echo $date->format('d-m-Y');
echo '<br>';

$format = 'd-m-Y';
$date = DateTime::createFromFormat($format, '26-01-2023');
echo "Format: $format; " . $date->format('d-m-Y l') . "<br>";

echo '<br>';
$date = new DateTime();
$newDate = $date->setDate(2001, 2, 3);
echo $newDate->format('d-m-Y');
//calcolare scadenza offerte o dell'abbonamento
echo '<br>';
$newDate = $date->setTime(14, 55);
echo $newDate->format('d-m-Y H:i:s') . "<br>";
$newDate = $date->modify('+1 month +3 day');
echo $newDate->format('d-m-Y');
echo '<br>';
$newDate = $date->modify('+45 day');
echo $newDate->format('d-m-Y');
echo '<br>';
$newDate = $date->modify('-15 day');
echo $newDate->format('d-m-Y');
echo '<br>';

$date = new DateTime('2000-01-01');
$newDate = $date->add(new DateInterval('P10D'));
echo $newDate->format('d-m-Y') . "<br>";

//ADD
$date = new DateTime('2000-01-01');
$newDate = $date->add(new DateInterval('PT10H30S'));
echo $newDate->format('d-m-Y H:i:s') . "<br>";

$date = new DateTimeImmutable('2000-01-01');
$newDate = $date->add(new DateInterval('P7Y5M4DT4H3M2S'));
echo $newDate->format('Y-m-d H:i:s') . "<br>";

//SUB
$date = new DateTimeImmutable('2000-01-20');
$newDate = $date->sub(new DateInterval('P10D'));
echo $newDate->format('d-m-Y') . "<br>";

$date = new DateTimeImmutable('2000-01-20');
$newDate = $date->sub(new DateInterval('PT10H30S'));
echo $newDate->format('Y-m-d H:i:s') . "<br>";

$date = new DateTimeImmutable('2000-01-20');
$newDate = $date->sub(new DateInterval('P7Y5M4DT4H3M2S'));
echo $newDate->format('Y-m-d H:i:s') . "<br>";

//calcolare quanto manca a capodanno mesi, giorni, ore, minuti

$origin = new DateTimeImmutable('2009-10-11');
$target = new DateTimeImmutable('2009-12-13');
$interval = $origin->diff($target);
echo $interval->format('%R%a days').'<br>';

$origin = date_create('2009-10-11');
$target = date_create('2009-12-13');
$interval = date_diff($origin, $target);
echo $interval->format('%R%a days').'<br>';

$interval = new DateInterval('P2Y4DT6H8M');
echo $interval->format('%d days').'<br>';

$january = new DateTime('2010-01-01');
$february = new DateTime('2010-12-31');
$interval = $february->diff($january);

// %a will output the total number of days.
echo $interval->format('%a total days')."<br>";

// While %d will only output the number of days not already covered by the
// month.
echo $interval->format('%m month, %d days');