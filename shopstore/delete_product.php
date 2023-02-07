<?php
require_once "inc/functions.php";
require_once "inc/session.php";

if (empty($_SESSION["isAdmin"])) {
    echo "Forbidden!";
    die();
}

if (isset($_REQUEST["id"])) {
    $id = $_REQUEST["id"];
    deleteUpdateProduct($catalogo,$id,true);
}

header("Location: products.php");
