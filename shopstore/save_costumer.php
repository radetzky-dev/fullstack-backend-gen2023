<?php
session_start();
require_once "inc/functions.php";
require_once "db/dbconn.php";

if (empty($_SESSION["isAdmin"])) {
    echo "Forbidden.";
    die();
}

if (isset($_REQUEST["id_cliente"])) {
    $id = $_REQUEST["id_cliente"];
    $dbConn = new Database();
    $dbConnection = $dbConn->openConnection();

    $fields = [
        $_REQUEST["name"], $_REQUEST["surname"], $_REQUEST["email"],
        $_REQUEST["company"], $_REQUEST["phone"], $_REQUEST["user_name"]
    ];

    $stmt = $dbConnection->prepare("update costumers SET name = ?, surname = ?, email = ?, society = ?, phone = ?, user = ? where id=$id");
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

header("Location: costumers.php");
