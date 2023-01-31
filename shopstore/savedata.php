<?php
session_start();
echo "Save data...<br>";


function updateFileJson(array $stocksArray, string $path): bool
{
    $jsonString = json_encode($stocksArray);
    $fp = fopen($path, 'w');
    $result = fwrite($fp, $jsonString);
    fclose($fp);
    return $result;
}


/**
 * readFileJson
 *
 * @param  mixed $path
 * @return array
 */
function readFileJson(string $path): array | null
{
    $jsonString = file_get_contents($path);
    return json_decode($jsonString, true);
}

echo "<pre>";
print_r($_SESSION['userData']);
echo "</pre>";

//leggo il file

//add anar

//salvo

$result = updateFileJson($_SESSION['userData'], "data/anagrafica.json");

echo "Risultato scrittura file ".$result;

$myAnagr= readFileJson("data/anagrafica.json");

echo "<pre>";
print_r($myAnagr);
echo "</pre>";

//echo dei dati rispecare $_SESSION Name ecc per poi salvarli un file json 