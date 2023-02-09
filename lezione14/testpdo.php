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
        $catalogo = $dbStatement->fetchAll();
        foreach ($catalogo as $index => $values) {
            foreach ($catalogo[$index] as $key => $value) {
                if (!is_numeric($key)) {
                    echo "$key: $value ";
                }
            }
            echo '<hr>';
        }
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
        //debug
        $dbStatement->debugDumpParams();

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

    //ESEMPIO con LIKE
    $query = "SELECT name, surname, society FROM costumers WHERE society LIKE :paramSociety";
    getQueryResults($query, $db, ['paramSociety' => '%soc%']);

    //ESEMPIO con paramentro ?
    $query = "SELECT name, surname FROM costumers WHERE surname LIKE ?";
    getQueryResults($query, $db, array("%Bi%"));

    //INSERT

    $names = ["gianni", "paola", "fulvio", "remo", "giulia"];
    $surnames = ["Green", "Red", "Blue", "Pink", "Yellow"];

    //FAKER
    $name = ucfirst($names[random_int(0, 4)]);
    $surname = ucfirst($surnames[random_int(0, 4)]);
    $mail =  strtolower("$name.$surname@$surname.com");
    $number= random_int(1000, 100000);
    $society= "society".$number;
    $user=$pwd = "guest".$number;
    $phone = "333-".$number;
    $id_address = random_int(1, 3);
    $date = date('Y-m-d H:i:s');

    //echo "$name $surname $mail $society $user $pwd $phone $date";

    $insertQuery ="INSERT INTO costumers (name, surname, email, society, phone, address_id, user, password, creation_date) VALUES (\"$name\", \"$surname\", \"$mail\", \"$society\", \"$phone\", $id_address, \"$user\", \"$pwd\",\"$date\")";
    getQueryResults($insertQuery, $db);


    //DELETE inf id > 8

    $deleteQuery ="DELETE FROM costumers WHERE phone LIKE \"%333-%\" LIMIT 1";
    getQueryResults($deleteQuery, $db);

    //Disconnect
    if ($db) {
        $db = null;
    }
}


echo "<hr><a href='#'>Torna alla home</a>";
