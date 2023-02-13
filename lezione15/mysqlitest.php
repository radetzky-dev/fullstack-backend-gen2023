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
 * @return void
 */
function showResult($query, $dbConnection, $fields)
{
        $result = $dbConnection->query($query);
        printf("Risultati ottenuti: %d <br>", $result->num_rows);
    
        while ($row = $result->fetch_assoc()) {
            foreach ($fields as $fieldName) {
                echo $row[$fieldName].' ';
            }
            echo '<br>';
        }
}

$dbConnection = getDbConnection();

if ($dbConnection) {
    echo "Connessione avvenuta con successo!<br>";

    $fields = ['name','quantity','price'];
    showResult("SELECT * FROM products", $dbConnection, $fields);
    echo "<hr>";

    $fields = ['name','surname','society', 'email','user'];
    showResult("SELECT * FROM costumers", $dbConnection, $fields);

    echo "Disconnessione dal db..." . dbDisconnection($dbConnection);
}
