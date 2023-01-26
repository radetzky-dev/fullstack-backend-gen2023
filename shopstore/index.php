<?php
require_once "inc/functions.php";
require_once "data/data.php";
require_once "inc/header.php";
require_once "inc/navbar.php";
?>
<h3>Welcome in our shop</h3>
<?php


foreach ($catalogo as $catName => $categorie) {
    foreach ($catalogo[$catName] as $key => $prodotti) {
        if (is_array($prodotti)) {
            if ($prodotti['qta'] == 1) {
                //TODO visualizzare immagine, shuffle, visualizzare bene
                echo "In " . strtoupper($catName) . " " . $prodotti['nome'] . '<br>';
            }
        }
    }
}


require_once "inc/footer.php";
