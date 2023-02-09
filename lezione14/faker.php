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

/**
 * createFakeCustomers
 *
 * @param  mixed $db
 * @param  mixed $ids
 * @return void
 */
function createFakeCustomers(PDO $db, array $ids): void
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
    $idaddress = $ids[random_int(0, count($ids) - 1)];
    $date = date('Y-m-d H:i:s');

    $insertQuery = "INSERT INTO costumers (name, surname, email, society, phone, address_id, user, password, creation_date) VALUES (\"$name\", \"$surname\", \"$mail\", \"$society\", \"$phone\", $idaddress, \"$user\", \"$pwd\",\"$date\")";
    getQueryResults($insertQuery, $db);
}

function createFakeProducts(PDO $db, array $ids): void
{
    $names = ["computer", "mp3 player", "tv color", "ipad", "borraccia", "lampada a olio", "macchina da scrivere", "zerbino", "tappi da bottiglia", "mollette", "stendipanni", "friggitrice", "scatola di chiodi"];

    //FAKER
    $name = ucfirst($names[random_int(0, count($names) - 1)]);
    $description =  "loren ipsum";
    $price = random_int(1, 999);
    $quantity = random_int(3, 12);
    $categoryid = $ids[random_int(0, count($ids) - 1)];
    $date = date('Y-m-d H:i:s');

    $insertQuery = "INSERT INTO products (name, description, price, quantity,category_id,creation_date) VALUES (\"$name\", \"$description\", \"$price\",  \"$quantity\", $categoryid, \"$date\")";

    getQueryResults($insertQuery, $db);
}

/**
 * getIdsFromTable
 *
 * @param  mixed $db
 * @param  mixed $tableName
 * @return array
 */
function getIdsFromTable(PDO $db, string $tableName): array
{
    $idsArray = [];
    $query = "SELECT id from $tableName";
    $dbStatement = $db->prepare($query, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
    $dbStatement->execute();
    $categories = $dbStatement->fetchAll();
    foreach ($categories as $index => $values) {
        foreach ($categories[$index] as $key => $value) {
            if (!is_numeric($key)) {
                $idsArray[] = $value;
            }
        }
    }
    return $idsArray;
}

$db = pdoConnect();

if ($db) {

    //GET numerbers categorys /indirizzi
    $idsArray = getIdsFromTable($db, "addresses");

    //INSERT
    for ($i = 1; $i < 10; $i++) {
        echo "Creo $i customer<br>";
        createFakeCustomers($db, $idsArray);
    }

    $idsArray = getIdsFromTable($db, "categories");

    //INSERT
    for ($i = 1; $i < 10; $i++) {
        echo "Creo $i prodotto<br>";
        createFakeProducts($db, $idsArray);
    }


    //Disconnect
    if ($db) {
        $db = null;
    }
}


echo "<hr><a href='#'>Torna alla home</a>";
