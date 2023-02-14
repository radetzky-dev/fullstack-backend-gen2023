<?php
session_start();
require_once "inc/functions.php";
require_once "db/dbconn.php";

if (empty($_SESSION["isAdmin"])) {
    echo "Forbidden.";
    die();
}

if (isset($_REQUEST["id_product"])) {
    $id = $_REQUEST["id_product"];
    $dbConn = new Database();
    $dbConnection = $dbConn->openConnection();

    $fields = [
        $_REQUEST["nome"], $_REQUEST["descrizione"], $_REQUEST["prezzo"], $_REQUEST["qta"]
    ];

    $stmt = $dbConnection->prepare("update products SET  name = ?, description = ?, price = ?, quantity = ? where id=$id");
    if ($stmt->execute($fields)) {
        echo "Aggiornamento record con id = $id avvenuto con successo!<br>";
    } else {
        echo "Errore nell'update!";
    }
    $dbConn->closeConnection($dbConnection);
} else {
    echo "Nessuna modifica possibile. Torna alla home";
    die();
}

header("Location: products.php");
