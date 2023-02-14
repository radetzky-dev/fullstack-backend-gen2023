<?php
require_once "inc/functions.php";
require_once "inc/header.php";
require_once "inc/navbar.php";
require_once "db/dbconn.php";

if (empty($_SESSION["isAdmin"])) {
    echo "Torna alla home.";
    die();
}

?>
<table class="table table-bordered">
    <thead thead class="thead-dark">
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Cognome</th>
            <th>email</th>
            <th>Società</th>
            <th>Telefono</th>
            <th>Username</th>
            <th>Password</th>
            <th>Gestisci</th>
        </tr>
    </thead>
    <tbody>

        <?php
        if (getenv('USE_DB') != "no") {
            $dbConn = new Database();
            $dbConnection = $dbConn->openConnection();

            $query = "SELECT * from costumers";
            $result = $dbConn->getResults($query, $dbConnection);

            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row['id'] .
                    "</td><td>" . $row['name']
                    . "</td><td>" . $row['surname']  .
                    "</td><td>" . $row['email']  .
                    "</td><td>" . $row['society']  .
                    "</td><td>" . $row['phone'] .
                    "</td><td>" . $row['user'] .
                    "</td><td>********</td>        
                <td><a class='btn btn-primary'  href='manage_costumers.php?id=" . $row['id'] . "'>Gestisci</a>
        <a class='btn btn-danger'  href='delete_costumers.php?id=" . $row['id'] . "'>Elimina</a></td>
        </tr>";
            }
            $dbConn->closeConnection($dbConnection);
        } else {

            if (function_exists('showCostumersJson')) {
                $costumers = readFileJson("data/anagrafica.json");
                foreach ($costumers as $key => $name) {
                    showProductsJson($costumers, $key);
                }
            } else {
                echo "Qualcosa è andato storto :/<br>";
            }
        }
        ?>
    </tbody>
</table>


<?php
require_once "inc/footer.php";
