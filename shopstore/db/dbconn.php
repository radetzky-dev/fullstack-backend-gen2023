<?php
putenv("DB_HOSTNAME=localhost");
putenv("DB_NAME=musadbshop");
putenv("DB_USER=root");
putenv("DB_PASSWORD=");
putenv("USE_DB=yes");  //yes | no

class Database
{

    public function openConnection(): mysqli | null
    {
        try {
            return new mysqli(getenv('DB_HOSTNAME'), getenv('DB_USER'), getenv('DB_PASSWORD'),  getenv('DB_NAME'));
        } catch (Exception $e) {
            echo "Impossibile connettersi al db " . $e->getMessage();
            return null;
        }
    }

    public function closeConnection(mysqli $db): bool
    {
        try {
            return $db->close();
        } catch (Exception $e) {
            echo "Impossibile disconnettersi al db " . $e->getMessage();
            return false;
        }
    }

    public function getResults($query, $dbConnection, $extraClause = "")
    {
        $query = $query . ' ' . $extraClause;
        return $dbConnection->query($query);
    }
}
