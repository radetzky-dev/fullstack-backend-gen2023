<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    echo "Ricevuto chiamata POST <br>";
    echo "Nome " . $_POST["name"] . " " . $_POST["surname"];
    echo "<hr>";
} else {
    if (isset($_GET["name"])) {
        echo "Ricevuto chiamata GET <br>";
        echo "Nome " . $_GET["name"] . " " . $_GET["surname"];
        echo "<hr>";
    } else
    {
        echo "Ricevuta chiamata vuota<br>";
    }
}
echo "<a href='getex.php'>Torna a Get</a> |";
echo "<a href='postex.php'>Torna a POST</a>";
