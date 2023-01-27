<?php

//stampare la data e ora del giorno nel formato:
// Oggi è venerdì 27 gennaio 2023. Sono le 11:xx.
//Tip: array giorni\mesi


$dayWeek = ['Lun', 'Mar', 'Mer', 'Gio', 'Ven', 'Sab', 'Dom',];
$month = ['Gen', 'Feb', 'Mar', 'Apr', 'Mag', 'Giu', 'Lug', 'Ago', 'Set', 'Ott', 'Nov', 'Dic'];

$today = getdate();
echo "<pre>";
print_r($today);
echo "</pre>";

echo "Oggi è ".$dayWeek[$today['wday']-1]. " ". $today['mday']. " ".$month[$today['mon']-1]." ". $today['year'].  ". Sono le <br>";
