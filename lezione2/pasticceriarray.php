<?php
$catalogo = array(
    "utensili" => array(
        array(
            "nome" => "martello",
            "prezzo" => 7.99,
            "qta" => 5,
        ),
        array(
            "nome" => "pinza",
            "prezzo" => 5.99,
            "qta" => 0,
        )
    ),
    "casalinghi" => array(
        array(
            "nome" => "scolapasta",
            "prezzo" => 1.99,
            "qta" => 1,
        )
    ),
    "giardinaggio" => array(
        array(
            "nome" => "rastrello",
            "prezzo" => 22.75,
            "qta" => 0
        )
    ),
);
$catalogo["utensili"][] = array("nome" => "pala", "prezzo" => 14.99, "qta" => 5);
$catalogo["casalinghi"][] = array("nome" => "tegame", "prezzo" => 35.99, "qta" => 2);
$catalogo["casalinghi"][] = array("nome" => "pentola", "prezzo" => 45.99, "qta" => 0);
$catalogo["giardinaggio"][] = array("nome" => "vaso", "prezzo" => 9.99, "qta" => 0);
$catalogo["giardinaggio"][] = array("nome" => "zappa", "prezzo" => 12.99, "qta" => 1);

/**
 * showCategory
 *
 * @param  mixed $catalogo
 * @param  mixed $catName
 * @return void
 */
function showCategory(array $catalogo, string $catName): void
{
    foreach ($catalogo[$catName] as $key => $prodotti) {
        if (is_array($prodotti)) {

            $qta = checkIfLast($prodotti['qta']);
            $price = $prodotti['prezzo'];

            if ($qta == "ULTIMO") {
                $oldPrice = "<del>" . $price . "</del>";
                $price = calculateDiscount($price, 15);
                $price = $oldPrice . '<br><b>' . $price . '</b>';
                $qta = "<b>ULTIMO</b>";
            }

            $buttonStatus = "";
            if ($qta == "ESAURITO") {
                $qta = "<span class='text-danger'>ESAURITO</span>";
                $buttonStatus = "disabled";
            }

            echo "<tr><td>" . $qta . "</td><td>" . $prodotti['nome'] . "</td><td>" . $price . " €" . "</td><td>" . $catName . "</td>
            <td><button class='btn btn-primary' " . $buttonStatus . " >Compra</button></td>
            </tr>";
        }
    }
}


/**
 * calculateDiscount
 *
 * @param  mixed $price
 * @param  mixed $percentDiscount
 * @return float
 */
function calculateDiscount($price, $percentDiscount): float
{
    $sconto = ($price * $percentDiscount) / 100;
    return round($price - $sconto, 2);
}

function checkIfLast($qta)
{
    if ($qta == 0) {
        //TODO in ROSSO
        return "ESAURITO";
    } elseif ($qta == 1) {
        return "ULTIMO";
    }
    return $qta;
}

//to do manca un header GENERAL STORE
//assegnare un colore ad ogni categoria
//visualizzare immagine prodotto

//quantità mostra solo quantità > 0
//se = 1 scrive ULTIMO PEZZO (scotno del 10% calcoliamo)
//esaurito e disabilita bottone compra

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
        <div class="container">
            <h3>General store</h3>
            <table class="table table-bordered">
                <thead thead class="thead-dark">
                    <tr>
                        <th>Qta</th>
                        <th>Descrizione</th>
                        <th>Prezzo</th>
                        <th>Categoria</th>
                        <th>Buy</th>
                    </tr>
                </thead>
                <tbody></tbody>
                <?php
                foreach ($catalogo as $key => $categorie) {
                    showCategory($catalogo, $key);
                }
                ?>
                </tbody>
            </table>
        </div>
    </container>
</body>

</html>