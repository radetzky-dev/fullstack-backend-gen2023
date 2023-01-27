<?php

//stampare la data e ora del giorno nel formato:
// Oggi è venerdì 27 gennaio 2023. Sono le 11:xx.
//Tip: array giorni\mesi

/**
 * showTodayDate
 *
 * @param  mixed $onlyDate
 * @return string
 */
function showTodayDate($onlyDate = true): string
{
    $dayWeek = ['Lun', 'Mar', 'Mer', 'Gio', 'Ven', 'Sab', 'Dom',];
    $month = ['Gen', 'Feb', 'Mar', 'Apr', 'Mag', 'Giu', 'Lug', 'Ago', 'Set', 'Ott', 'Nov', 'Dic'];

    $today = getdate();
    $date = $dayWeek[$today['wday'] - 1] . " " . $today['mday'] . " " . $month[$today['mon'] - 1] . " " . $today['year'];
    if (!$onlyDate) {
        $date = $date . ' - ' . $today['hours'] . ":" . $today['minutes'];
    }
    return $date;
}

echo showTodayDate() . '<br>';
echo showTodayDate(false) . '<br>';
