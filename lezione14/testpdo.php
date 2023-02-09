<?php
putenv("DB_PASSWORD=");

try {
    $hostname = "localhost";
    $dbname = "musadbshop";
    $user = "root";
    $db = new PDO("mysql:host=$hostname;dbname=$dbname", $user, getenv("DB_PASSWORD"));
} catch (PDOException $e) {
    echo "Errore: " . $e->getMessage();
    die();
}

echo "Connessione avvenuta con successo!";