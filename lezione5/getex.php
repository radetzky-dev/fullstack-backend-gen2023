<?php
if (isset($_GET["name"])) {
    echo 'Hello ' . htmlspecialchars($_GET["name"]) . '!';
}

if (isset($_GET["surname"])) {
    echo 'Cognome' . htmlspecialchars($_GET["surname"]) . '!';
}

?>
<p>Test</p>
<form method="GET" action="ricevechiamate.php">
    <input type="text" id="name" name="name" />
    <input type="text" id="surname" name="surname" />
    <input type="submit" value="Invia" />
</form>
