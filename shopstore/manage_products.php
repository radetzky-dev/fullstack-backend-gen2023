<?php
require_once "inc/functions.php";
require_once "inc/header.php";
require_once "inc/navbar.php";  //NAV BAR DA SISTEMARE
require_once "db/dbconn.php";

$page_info_title ="AGGIUNGI PRODOTTO";

$nome=$descrizione = "";
?>


<?php if (empty($_SESSION["isAdmin"])) {
    echo "Torna alla home.";
    die();
}
if (isset($_REQUEST["id"])) {
    $id = $_REQUEST["id"];
    $page_info_title = "MODIFICA PRODOTTO";

    if (getenv('USE_DB') != "no") {
        $dbConn = new Database();
        $dbConnection = $dbConn->openConnection();

        $query = "SELECT * from products";
        $result = $dbConn->getResults($query, $dbConnection, "where id='" . $_REQUEST["id"] . "'");

        while ($row = $result->fetch_assoc()) {
            $id_prodotto = $row['id'];
            $nome = $row['name'];
            $qta = $row['quantity'];
            $descrizione = $row['description'];
            $prezzo = $row['price'];
        }
        $dbConn->closeConnection($dbConnection);
    }
}
?>

<h3><?= $page_info_title; ?></h3>

<div class="col-sm-6">
    <form method="POST" action="save_product.php" enctype="multipart/form-data" onsubmit="return verifyPassword();">
        <div class="form-group">
            <label for="nome">Id prodotto</label>
            <input type="number" class="form-control" id="id_product" name="id_product" value="<?= $id; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="<?= $nome; ?>" required>
        </div>
        <div class="form-group">
            <label for="quantita">Quantità</label>
            <input type="number" class="form-control" id="qta" name="qta" value="<?= $qta; ?>" required>
        </div>
        <div class="form-group">
            <label for="descrizione">Descrizione</label>
            <input type="text" class="form-control" id="descrizione" name="descrizione" value="<?= $descrizione; ?>" required>
        </div>
        <div class="form-group">
            <label for="prezzo">Prezzo</label>
            <input type="number" class="form-control" step="0.1" id="prezzo" name="prezzo" value="<?= $prezzo; ?>" required>
        </div>
        <div class="form-group">
            <label for="categoria">Categoria</label>
            <select name="category" id="category" class="form-control">
                <option value="UTENSILI">UTENSILI</option>
                <option value="GIARDINAGGIO">GIARDINAGGIO</option>
                <option value="CASALINGHI">CASALINGHI</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary"><?php echo $page_info_title; ?></button>
    </form>
</div>
<?php

require_once "inc/footer.php";
