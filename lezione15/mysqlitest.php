<?php
putenv("DB_HOSTNAME=localhost");
putenv("DB_NAME=musadbshop");
putenv("DB_USER=root");
putenv("DB_PASSWORD=");

/**
 * getDbConnection
 *
 * @return mysqli
 */
function getDbConnection(): mysqli | null
{
    try {
        return new mysqli(getenv('DB_HOSTNAME'), getenv('DB_USER'),  getenv('DB_PASSWORD'),  getenv('DB_NAME'));
    } catch (Exception $e) {
        echo "Impossibile connettersi al db " . $e->getMessage();
        return null;
    }
}

/**
 * dbDisconnection
 *
 * @param  mixed $db
 * @return bool
 */
function dbDisconnection(mysqli $db): bool
{
    try {
        return $db->close();
    } catch (Exception $e) {
        echo "Impossibile disconnettersi al db " . $e->getMessage();
        return false;
    }
}

/**
 * showResult
 *
 * @param  mixed $query
 * @param  mixed $dbConnection
 * @param  mixed $fields
 * @param  mixed $extraClause
 * @return void
 */
function showResult($query, $dbConnection, $fields, $extraClause = "")
{
    $query = $query . ' ' . $extraClause;
    $result = $dbConnection->query($query);
    printf("Risultati ottenuti: %d <br>", $result->num_rows);

    while ($row = $result->fetch_assoc()) {
        foreach ($fields as $fieldName) {
            echo $row[$fieldName] . ' ';
        }
        echo '<br>';
    }
}

/**
 * showResultObj
 *
 * @param  mixed $query
 * @param  mixed $dbConnection
 * @param  mixed $fields
 * @return void
 */
function showResultObj($query, $dbConnection, $fields)
{
    $result = $dbConnection->query($query);
    printf("Risultati ottenuti: %d <br>", $result->num_rows);

    while ($obj = $result->fetch_object()) {
        foreach ($fields as $fieldName) {
            echo $obj->$fieldName . ' ';
        }
        echo '<br>';
    }
}

$dbConnection = getDbConnection();

if ($dbConnection) {
    echo "Connessione avvenuta con successo!<br>";



    $fields = ['name', 'surname', 'society', 'email', 'user'];
    $whereClause = "WHERE surname like '%White%'";
    showResult("SELECT * FROM costumers", $dbConnection, $fields, $whereClause);
    echo "<hr>";
    showResultObj("SELECT * FROM costumers", $dbConnection, $fields);

    echo '<hr>';

    // insert into products (name, description, price, quantity,category_id,creation_date) VALUE ("laptop", "computer con UBUNTU","299.49",7,4,NOW());

    $stmt = $dbConnection->prepare("insert into products (name, description, price, quantity,category_id,creation_date) VALUES ( ?,?,?,?,?,?)");

    $name = "Biscotti";
    $description = "buoni per la colazione";
    $price = 2.5;
    $qt = 3;
    $category_id = 3;
    $date = date('Y-m-d H:i:s');

    if ($stmt->execute([$name, $description, $price, $qt, $category_id, $date])) {
        echo "Inserimento avvenuto con successo!<br>";
    }


    $fields = ['name', 'quantity', 'price'];
    showResult("SELECT * FROM products", $dbConnection, $fields);
    echo "<hr>";

    echo "Disconnessione dal db..." . dbDisconnection($dbConnection);
}
