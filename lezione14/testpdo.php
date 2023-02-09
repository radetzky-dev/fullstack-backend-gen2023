<?php
putenv("DB_HOSTNAME=localhost");
putenv("DB_NAME=musadbshop");
putenv("DB_USER=root");
putenv("DB_PASSWORD=");

function pdoConnect()
{
    try {
        return new PDO("mysql:host=" . getenv('DB_HOSTNAME') . ";dbname=" . getenv('DB_NAME') . "", getenv("DB_USER"), getenv("DB_PASSWORD"));
    } catch (PDOException $e) {
        echo "Errore di connessione al DB: " . $e->getMessage();
    }
}

/**
 * getResults
 *
 * @param  mixed $query
 * @param  mixed $db
 * @return PDOStatement
 */
function getQueryResults(string $query, PDO $db, array $execParams = null): PDOStatement | bool
{
    try {
        $dbStatement = $db->prepare($query, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
        if (!is_null($execParams)) {
            return $dbStatement->execute($execParams);
        } else {
            return $dbStatement->execute();
        }
    } catch (PDOException $e) {
        echo "Si è verificato un errore nella query $query " . $e->getMessage();
        return false;
    }
}

$db = pdoConnect();

if ($db) {
    try {
        $query = 'SELECT * from costumers';

        $dbStatement = getQueryResults($query, $db);
        if ($dbStatement instanceof PDOStatement) {
            while ($row = $dbStatement->fetch()) {
                echo "<pre>";
                print_r($row);
                echo "</pre>";
            }
        }

        $query = "SELECT name, surname FROM costumers WHERE surname = :findSurname";
        $dbStatement = $db->prepare($query, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);

        $dbStatement->execute(['findSurname' => 'Bianchi']);
        echo "Cerco Bianchi<br>";
        echo "<pre>";
        print_r($dbStatement->fetchAll());
        echo "</pre>";

        $dbStatement->execute(['findSurname' => 'Rossi']);
        echo "Cerco Rossi<br>";
        echo "<pre>";
        print_r($dbStatement->fetchAll());
        echo "</pre>";

        $query = "SELECT name, surname, society FROM costumers WHERE society LIKE :paramSociety";
        $dbStatement = $db->prepare($query, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
        $dbStatement->execute(['paramSociety' => '%soc%']);
        echo "LIKE esempio<br>";
        echo "<pre>";
        print_r($dbStatement->fetchAll());
        echo "</pre>";
    } catch (PDOException $e) {
        echo "Si è verificato un errore. Impossibile procedere " . $e->getMessage();
    }

    //Disconnect
    if ($db) {
        $db = null;
    }
}


echo "<hr><a href='#'>Torna alla home</a>";
