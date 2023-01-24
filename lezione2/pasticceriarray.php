<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasticceria</title>
</head>
<body>
    <?php
    $catalogo = array(
        "utensili" => array(
             "prodotti" => array(
                 "nome" => "martello",
                 "prezzo" => 7.99
             )),
        "casalinghi" => array(
            "prodotti" => array(
                "nome" => "scolapasta",
                "prezzo" => 1.99
            )),
            "giardinaggio" => array(
                "prodotti" => array(
                    "nome" => "rastrello",
                    "prezzo" => 22.75
                )),
            );

            var_dump ($catalogo['utensili']);
            echo '<hr>';
            var_dump ($catalogo['casalinghi']);
            echo '<hr>';
            var_dump ($catalogo['giardinaggio']);
            echo '<hr>';

    //stampa 5 prodotti contenuti in un array con prezzi in una tabella (visualizza immagine)
    //bootstrap per la tabella
    //array è multidimensionale e al primo livello categorie: utensili, casalinghi, giardinaggio -> lista di 5 prodotti nome,descriz, prezzo e url immagine 

    //foreach ($mioArray as $key => $value) {
    //    echo " chiave {$key} => {$value} ";
    // }
    ?>
    
</body>
</html>