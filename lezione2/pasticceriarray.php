<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>General Store</title>
</head>

<body>
    <?php
    $catalogo = array(
        "utensili" => array(
            array(
                "nome" => "martello",
                "prezzo" => 7.99
            ),
            array(
                "nome" => "pinza",
                "prezzo" => 5.99
            )
        ),
        "casalinghi" => array(
            array(
                "nome" => "scolapasta",
                "prezzo" => 1.99
            )
        ),
        "giardinaggio" => array(
            array(
                "nome" => "rastrello",
                "prezzo" => 22.75
            )
        ),
    );

    echo '<hr>';
    echo "<h4>Elenco utensili</h4>";
    foreach ($catalogo['utensili'] as $key => $prodotti) {
        if (is_array($prodotti)) {
            foreach ($prodotti as $key => $prodotto) {
                echo $prodotto . '<br>';
            }
        }
    }

    //stampa 5 prodotti contenuti in un array con prezzi in una tabella (visualizza immagine)
    //bootstrap per la tabella
    //array è multidimensionale e al primo livello categorie: utensili, casalinghi, giardinaggio -> lista di 5 prodotti nome,descriz, prezzo e url immagine 

    //foreach ($mioArray as $key => $value) {
    //    echo " chiave {$key} => {$value} ";
    // }
    ?>

</body>

</html>