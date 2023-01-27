<?php

if (isset($_POST["name"])) {
    echo 'Nome ' . htmlspecialchars($_POST["name"]) . '!';
}

if (isset($_POST["surname"])) {
    echo 'Cognome ' . htmlspecialchars($_POST["surname"]) . '!';
}

?>
<p>Anagrafica</p>
<form method="POST" action="ricevechiamate.php">
    <input type="text" id="name" name="name" />
    <input type="text" id="surname" name="surname" />
    <input type="submit" value="Invia" />
</form>
