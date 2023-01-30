<html>

<head>
    <title>Form test</title>
    <script>
        function cleanForm() {
            let formVal = document.getElementById("anagraficaForm").reset();
            document.getElementById("nome").setAttribute("value","");
            document.getElementById("cognome").setAttribute("value","");
            console.log ("Fatto "+ formVal);
        }
    </script>
</head>

<body>
    <?php
    $name = $surname = "";

    //TODO
    /*
    1- fare in modo che tutti i campi siano compilati altrimenti te lo segnala
    2- mostrare selezione di città e provincia
    3- attivare con javascript la funzione pulisci
    4- mettere boostrap per renderlo più leggibile

    *** extra
    5 - aggiungere campo eta e controllare che sia numerico
    6- trasformare questo in una funzione is_integer(array_search('Milano', $cities)) ? 'selected' : null ?
    
    */

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        var_dump($_POST);
        $name = $_POST['nome'];
        $surname = $_POST['cognome'];
        $cities = $_POST['cities'];
    }
    ?>
    <form id="anagraficaForm" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Nome: <input type="text" name="nome" id="nome" value="<?= $name ?>" required><br>
        Cognome: <input type="text" name="cognome" id="cognome" value="<?= $surname ?>" required><br>
        Città<select name="cities[]" multiple required>
            <option value="Milano" <?= is_integer(array_search('Milano', $cities)) ? 'selected' : null ?>>Milano</option>
            <option value="Roma" <?= is_integer(array_search('Roma', $cities)) ? 'selected' : null ?>>Roma</option>
            <option value="Lecce" <?= is_integer(array_search('Lecce', $cities)) ? 'selected' : null ?>>Lecce</option>
            <option value="Palermo" <?= is_integer(array_search('Palermo', $cities)) ? 'selected' : null ?>>Palermo</option>
        </select>
        <br><br>
        Provincia
        <input type="checkbox" name="province[]" value="Lecce">Lecce <br>
        <input type="checkbox" name="province[]" value="Roma">Roma <br>
        <input type="checkbox" name="province[]" value="Napoli">Napoli <br>
        <input type="checkbox" name="province[]" value="Milano">Milano <br>

        <input type="hidden" name="id" value="<?= $name . ' ' . $surname ?>">
        <input type="submit" value="Invia">
      
        <input type="button" value="Pulisci" onclick="cleanForm();">
    </form>
</body>
</html>