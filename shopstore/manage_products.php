<?php
require_once "inc/functions.php";
require_once "inc/header.php";
require_once "inc/navbar.php";  //NAV BAR DA SISTEMARE
?>
<!--
    TO DO
    - creare la pagina save_product.php che inserisce nel file json il nuovo prodotto
-->
<?php if (empty($_SESSION["isAdmin"])) {
    echo "Torna alla home.";
    die();
} ?>

<h3>INSERISCI UN NUOVO PRODOTTO</h3>


<div class="col-sm-6">
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" onsubmit="return verifyPassword();">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="form-group">
            <label for="quantita">Quantità</label>
            <input type="number" class="form-control" id="quantita" name="quantita" required>
        </div>
        <div class="form-group">
            <label for="descrizione">Descrizione</label>
            <input type="text" class="form-control" id="descrizione" name="descrizione" required>
        </div>
        <div class="form-group">
            <label for="prezzo">Prezzo</label>
            <input type="number" class="form-control" step="0.1" id="prezzo" name="prezzo" required>
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
