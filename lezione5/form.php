<html>

<head>
    <title>Form test</title>
    <script>
        function cleanForm() {
            let formVal = document.getElementById("anagraficaForm").reset();
            document.getElementById("nome").setAttribute("value", "");
            document.getElementById("cognome").setAttribute("value", "");
            document.getElementById("eta").setAttribute("value", "");
            document.getElementById("cities").value = "";
            var textinputs = document.querySelectorAll('input[type=checkbox]');
            //console.log(textinputs);
            for (var i = 0; i < textinputs.length; i++) {
                textinputs[i].checked = false;
            }
        }
    </script>
</head>

<body>
    <?php
    //inizializziamo vuoti
    $name = $surname = $eta = "";
    $cities[] = [];
    $province[] = [];

    //TODO
    /*
    4- mettere boostrap per renderlo più leggibile
    */

    /**
     * checkIfChecked
     *
     * @param  mixed $cityName
     * @param  mixed $list
     * @param  mixed $checkSign
     * @return void
     */
    function checkIfChecked(string $cityName, array $list, string $checkSign = "selected")
    {
        if (is_integer(array_search($cityName, $list))) {
            return $checkSign;
        }
        return null;
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['nome'];
        $surname = $_POST['cognome'];
        $eta = $_POST['eta'];
        $cities = $_POST['cities'];
        $province = $_POST['province'];
    }
    ?>
    <form id="anagraficaForm" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Nome: <input type="text" name="nome" id="nome" value="<?= $name ?>" required><br>
        Cognome: <input type="text" name="cognome" id="cognome" value="<?= $surname ?>" required><br>
        Età: <input type="number" name="eta" id="eta" value="<?= $eta ?>" required><br>
        Città<select name="cities[]" id="cities" multiple required>
            <option value="Milano" <?= checkIfChecked("Milano", $cities)  ?>>Milano</option>
            <option value="Roma" <?= checkIfChecked("Roma", $cities) ?>>Roma</option>
            <option value="Lecce" <?= checkIfChecked("Lecce", $cities)  ?>>Lecce</option>
            <option value="Palermo" <?= checkIfChecked("Palermo", $cities)  ?>>Palermo</option>
        </select>
        <br><br>
        Provincia
        <input type="checkbox" name="province[]" id="province" value="Lecce" <?= checkIfChecked("Lecce", $province, "checked") ?>>Lecce <br>
        <input type="checkbox" name="province[]" id="province" value="Roma" <?= checkIfChecked("Roma", $province, "checked") ?>>Roma <br>
        <input type="checkbox" name="province[]" id="province" value="Napoli" <?= checkIfChecked("Napoli", $province, "checked") ?>>Napoli <br>
        <input type="checkbox" name="province[]" id="province" value="Milano" <?= checkIfChecked("Milano", $province, "checked") ?>>Milano <br>

        <input type="hidden" name="id" value="<?= $name . ' ' . $surname ?>">
        <input type="submit" value="Invia">

        <input type="button" value="Pulisci" onclick="cleanForm();">
    </form>
</body>

</html>