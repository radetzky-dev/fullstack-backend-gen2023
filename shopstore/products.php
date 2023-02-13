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
            <th>Qta</th>
            <th>Nome</th>
            <th>Descrizione</th>
            <th>€</th>
            <th>Categoria</th>
            <th>Operazioni</th>
        </tr>
    </thead>
    <tbody>

        <?php
        if (getenv('USE_DB') != "no") {
            $dbConn = new Database();
            $dbConnection = $dbConn->openConnection();

            $query = "SELECT * from products";
            $result = $dbConn->getResults($query, $dbConnection);

            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row['id'] . "</td><td>" . $row['quantity']  . "</td><td>" . $row['name']  . "</td><td>" . $row['description']  . "</td><td>" . $row['price']  . " €" . "</td><td class='table-primary'>" . strtoupper($row['category_id']) . "</td>
        <td><a class='btn btn-primary'  href='manage_products.php?id=" . $row['id'] . "'>Gestisci</a>
        <a class='btn btn-danger'  href='delete_product.php?id=" . $row['id'] . "'>Elimina</a></td>
        </tr>";
            }
            $dbConn->closeConnection($dbConnection);
        } else {

            if (function_exists('showProductsJson')) {
                $catalogo = readFileJson("data/products.json");
                foreach ($catalogo as $key => $categorie) {
                    showProductsJson($catalogo, $key);
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
