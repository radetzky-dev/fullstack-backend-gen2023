<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    echo "Ricevuto chiamata POST <br>";
    echo "Nome " . $_POST["name"] . " " . $_POST["surname"];
    var_dump($_POST);
    echo "<hr>";
    echo $_SERVER['SERVER_NAME'] . '<br>';
    echo "Pagina che chiama " . $_SERVER['HTTP_REFERER'] . '<br>';
    echo "<pre>";
    var_dump($_SERVER);
    echo "</pre>";
    echo "REQUEST<br>";
    echo "<pre>";
    var_dump($_REQUEST);
    echo "</pre>";
} else {
    if (isset($_GET["name"]) && isset($_GET["surname"])) {
        echo "Ricevuto chiamata GET <br>";
        echo "Nome " . $_GET["name"] . " " . $_GET["surname"];
        var_dump($_GET);

        echo "<hr>";
    } else {
        echo "Ricevuta chiamata vuota<br>";
        echo "Query String " . $_SERVER["QUERY_STRING"] . "<br>";
    }
}
echo "<a href='getex.php'>Torna a Get</a> |";
echo "<a href='postex.php'>Torna a POST</a>";
