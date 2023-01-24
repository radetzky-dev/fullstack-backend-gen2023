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
$catalogo["utensili"]["terzoLivello"] = array("nome" => "pala", "prezzo" => 14.99);
$catalogo["casalinghi"]["secondoLivello"] = array("nome" => "tegame", "prezzo" => 35.99);
$catalogo["casalinghi"]["terzoLivello"] = array("nome" => "pentola", "prezzo" => 45.99);
$catalogo["giardinaggio"]["secondoLivello"] = array("nome" => "vaso", "prezzo" => 9.99);
$catalogo["giardinaggio"]["terzoLivello"] = array("nome" => "zappa", "prezzo" => 12.99);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>General Store</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <container>
        <div class="container-md">
            <table class="table table-bordered">
                <thead thead class="thead-dark">
                    <tr>
                        <th colspan=2>Categoria: Utensili</th>
                    </tr>
                    <tr>
                        <th>Descrizione</th>
                        <th>Prezzo</th>
                    </tr>
                </thead>
                <tbody></tbody>
                <?php
                foreach ($catalogo['utensili'] as $key => $prodotti) {
                    if (is_array($prodotti)) {
                        echo "<tr><td>" . $prodotti['nome'] . "</td><td>" . $prodotti['prezzo'] . " €" . "</td></tr>";
                    }
                }
                ?>
                </tbody>
            </table>
        </div>
    </container>



</body>

</html>