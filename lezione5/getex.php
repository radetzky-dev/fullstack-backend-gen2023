<?php

if (isset($_GET["name"])) {
    echo 'Hello ' . htmlspecialchars($_GET["name"]) . '!';

    //db
}

if (isset($_GET["surname"])) {
    echo 'Cognome' . htmlspecialchars($_GET["surname"]) . '!';
}

?>
<p>Test</p>
<form>
    <input type="text" id="name" name="name" />
    <input type="text" id="surname" name="surname" />
    <input type="submit" value="Invia" />
</form>
