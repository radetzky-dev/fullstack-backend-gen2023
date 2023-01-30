<html>

<head>
    <title>Form test</title>
</head>

</html>

<body>
    <?php
    $name = $surname = "";

    //TODO
    /*
    1- fare in modo che tutti i campi siano compilati altrimenti te lo segnala
    2- mostrare selezione di città e provincia
    3- attivare con javascript la funzione pulisci
    4- mettere boostrap per renderlo più leggibile
    */

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
       var_dump($_POST);
        $name = $_POST['nome'];
        $surname = $_POST['cognome'];
        /**
         * <?= array_search('one', $_POST['attributes']) ? null : 'selected'  ?>
         */
    }
    ?>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Nome: <input type="text" name="nome" value="<?= $name ?>"><br>
        Cognome: <input type="text" name="cognome" value="<?= $surname ?>"><br>
        Città<select name="cities[]" multiple>
            <option value="Milano" >Milano</option>
            <option value="Roma">Roma</option>
            <option value="Lecce">Lecce</option>
            <option value="Palermo">Palermo</option>
        </select>
        <br><br>
        Provincia
        <input type="checkbox" name="province[]" value="Lecce">Lecce <br>
        <input type="checkbox" name="province[]" value="Roma">Roma <br>
        <input type="checkbox" name="province[]" value="Napoli">Napoli <br>
        <input type="checkbox" name="province[]" value="Milano">Milano <br>

        <input type="hidden" name="id" value="<?= $name.' '.$surname ?>">
        <input type="submit" value="INVIA">
        <input type="button" value="Pulisci">
    </form>
</body>