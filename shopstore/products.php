<?php
require_once "inc/functions.php";
require_once "inc/header.php";
require_once "inc/navbar.php";  //NAV BAR DA SISTEMARE

if (empty($_SESSION["isAdmin"])) {
    echo "Torna alla home.";
    die();
}

if (function_exists('showProductTable')) {
    $catalogo = readFileJson("data/products.json");
    showProductTable($catalogo);
} else {
    echo "Qualcosa è andato storto :/<br>";
}

?>
<?php
require_once "inc/footer.php";
