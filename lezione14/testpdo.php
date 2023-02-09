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
 * showResults
 *
 * @param  mixed $dbStatement
 * @return bool
 */
function showResults($dbStatement): bool
{
    try {
        while ($row = $dbStatement->fetch()) {
            foreach ($row as $key => $value) {
                if (!is_numeric($key))
                {
                    echo "[$key] - $value <br>";
                }
            }
        }
        echo "<hr>";
        return true;
    } catch (Exception $e) {
        echo "Errore nella visualizzazione dei dati " . $e->getMessage();
        return false;
    }
}


/**
 * getQueryResults
 *
 * @param  mixed $query
 * @param  mixed $db
 * @param  mixed $execParams
 * @return PDOStatement
 */
function getQueryResults(string $query, PDO $db, array $execParams = null): bool
{
    try {
        $dbStatement = $db->prepare($query, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
        if (!is_null($execParams)) {
            $dbStatement->execute($execParams);
        } else {
            $dbStatement->execute();
        }
        return showResults($dbStatement);
    } catch (PDOException $e) {
        echo "Si è verificato un errore nella query $query " . $e->getMessage();
        return false;
    }
}

$db = pdoConnect();

if ($db) {
    $query = 'SELECT * from costumers';
    getQueryResults($query, $db);

    $query = "SELECT name, surname FROM costumers WHERE surname = :findSurname";
    getQueryResults($query, $db, ['findSurname' => 'Bianchi']);
    getQueryResults($query, $db, ['findSurname' => 'Rossi']);

    $query = "SELECT name, surname, society FROM costumers WHERE society LIKE :paramSociety";
    getQueryResults($query, $db, ['paramSociety' => '%soc%']);

    //Disconnect
    if ($db) {
        $db = null;
    }
}


echo "<hr><a href='#'>Torna alla home</a>";
