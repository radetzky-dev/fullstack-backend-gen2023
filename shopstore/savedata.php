<?php
session_start();

require_once "inc/functions.php";

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