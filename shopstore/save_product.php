<?php
session_start();

require_once "inc/functions.php";

//leggo il file
$catalogo = readFileJson("data/products.json");

if ($catalogo == null) {
    $catalogo = array();
}

//TODO gestire update

$catalogo[strtolower($_REQUEST['category'])][] = $_REQUEST;

$result = updateFileJson($catalogo, "data/products.json");

header("Location: products.php");