<?php
session_start();

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
    try {
        $jsonString = file_get_contents($path);
        return json_decode($jsonString, true);
    } catch (Exception $e) {
        echo "Il file non esiste.";
        return null;
    }
}

//leggo il file
$myAnagr = readFileJson("data/anagrafica.json");

if ($myAnagr == null) {
    $myAnagr = array();
}
//add anar
$myAnagr[] = $_SESSION['userData'];

$result = updateFileJson($myAnagr, "data/anagrafica.json");
$myAnagr = readFileJson("data/anagrafica.json");
require_once 'login.php';