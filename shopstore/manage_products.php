<?php
require_once "inc/functions.php";
require_once "inc/header.php";
require_once "inc/navbar.php";  //NAV BAR DA SISTEMARE
?>


<?php if (empty($_SESSION["isAdmin"])) {
    echo "Torna alla home.";
    die();
}

$page_info_title = "INSERISCI UN NUOVO PRODOTTO";

$nome = $qta = $prezzo = $descrizione = "";

$catalogo = readFileJson("data/products.json");

$id = 0;

if (isset($_REQUEST["id"])) {
    $id = $_REQUEST["id"];
    $page_info_title = "MODIFICA DI UN PRODOTTO";

    foreach ($catalogo as $catName => $categorie) {
        foreach ($catalogo[$catName] as $key => $prodotto) {

            if (isset($prodotto['id_product'])) {
                if ($_REQUEST["id"] == $prodotto['id_product']) {
                    if (isset($prodotto['id'])) {
                        $id = $prodotto['id_product'];
                    }
                    $nome = $prodotto['nome'];
                    $qta = $prodotto['qta'];
                    $prezzo = $prodotto['prezzo'];
                    if (isset($prodotto['descrizione'])) {
                        $descrizione = $prodotto['descrizione'];
                    }
                }
            }
        }
    }
} else {
    $id = getNewIdToInsert($catalogo);
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

        <button type="submit" class="btn btn-primary">Aggiungi prodotto</button>
    </form>
</div>
<?php

require_once "inc/footer.php";
