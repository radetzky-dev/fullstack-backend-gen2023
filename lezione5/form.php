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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
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
    <div class="container mt-2">
        <form id="anagraficaForm" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="row g-3">
                <div class="col">
                    Nome: <input type="text" name="nome" id="nome" value="<?= $name ?>" required><br>
                    Cognome: <input type="text" name="cognome" id="cognome" value="<?= $surname ?>" required><br>
                    Età: <input type="number" name="eta" id="eta" value="<?= $eta ?>" required><br>
                </div>
                <div class="col-md-12">
                    Città<select name="cities[]" id="cities" multiple required>
                        <option value="Milano" <?= checkIfChecked("Milano", $cities)  ?>>Milano</option>
                        <option value="Roma" <?= checkIfChecked("Roma", $cities) ?>>Roma</option>
                        <option value="Lecce" <?= checkIfChecked("Lecce", $cities)  ?>>Lecce</option>
                        <option value="Palermo" <?= checkIfChecked("Palermo", $cities)  ?>>Palermo</option>
                    </select>
                </div>
                <br><br>
                <div class="col">
                    Provincia <br>
                    <input type="checkbox" name="province[]" id="province" value="Lecce" <?= checkIfChecked("Lecce", $province, "checked") ?>>Lecce <br>
                    <input type="checkbox" name="province[]" id="province" value="Roma" <?= checkIfChecked("Roma", $province, "checked") ?>>Roma <br>
                    <input type="checkbox" name="province[]" id="province" value="Napoli" <?= checkIfChecked("Napoli", $province, "checked") ?>>Napoli <br>
                    <input type="checkbox" name="province[]" id="province" value="Milano" <?= checkIfChecked("Milano", $province, "checked") ?>>Milano <br>
                </div>
                <input type="hidden" name="id" value="<?= $name . ' ' . $surname ?>">
                <div class="col-12">
                    <input type="submit" class="btn btn-primary" value="Invia">

                    <input type="button" class="btn btn-primary " value="Pulisci" onclick="cleanForm();">
                </div>
        </form>
    </div>
    </div>
</body>

</html>