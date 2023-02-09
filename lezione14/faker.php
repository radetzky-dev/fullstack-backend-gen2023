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
        return true;
    } catch (PDOException $e) {
        echo "Si è verificato un errore nella query $query " . $e->getMessage();
        return false;
    }
}

function createFakeCustomers($db)
{
    $names = ["gianni", "paola", "fulvio", "remo", "giulia", "Boh", "Rachel"];
    $surnames = ["Green", "Red", "Blue", "Pink", "Yellow", "White", "Clinton", "Simpson"];

    //FAKER
    $name = ucfirst($names[random_int(0, count($names) - 1)]);
    $surname = ucfirst($surnames[random_int(0, count($surnames) - 1)]);
    $mail =  strtolower("$name.$surname@$surname.com");
    $number = random_int(1000, 100000);
    $society = "society" . $number;
    $user = $pwd = "guest" . $number;
    $phone = "333-" . $number;
    $idaddress = random_int(1, 3); //TODO creare query che ritorna numero di id
    $date = date('Y-m-d H:i:s');

    $insertQuery = "INSERT INTO costumers (name, surname, email, society, phone, address_id, user, password, creation_date) VALUES (\"$name\", \"$surname\", \"$mail\", \"$society\", \"$phone\", $idaddress, \"$user\", \"$pwd\",\"$date\")";
    getQueryResults($insertQuery, $db);
}

$db = pdoConnect();

if ($db) {

    //GET numerbers categorys /indirizzi
    $query = "SELECT id from categories";
    $dbStatement = $db->prepare($query, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
    $dbStatement->execute();
    $categories = $dbStatement->fetchAll();
    echo "<pre>";
    var_dump($categories);
    echo "</pre>";
    foreach ($catalogo as $index => $values) {
        foreach ($catalogo[$index] as $key => $value) {
            if (!is_numeric($key)) {
                echo "$key: $value ";
            }
        }
        echo '<hr>';

    die();

    //INSERT
    for ($i = 1; $i < 5; $i++) {
      //  createFakeCustomers($db);
    }


    //Disconnect
    if ($db) {
        $db = null;
    }
}


echo "<hr><a href='#'>Torna alla home</a>";
