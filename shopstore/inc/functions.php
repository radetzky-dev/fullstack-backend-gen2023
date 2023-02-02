<?php

//Variables
$shopName ="MusaShop";

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

            echo "<tr><td>" . $qta . "</td><td>" . $prodotti['nome'] . "</td><td>" . $price . " €" . "</td><td class='table-primary'>" . strtoupper($catName) . "</td>
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

/**
 * checkIfLast
 *
 * @param  mixed $qta
 * @return void
 */
function checkIfLast($qta)
{
    if ($qta == 0) {
        return "ESAURITO";
    } elseif ($qta == 1) {
        return "ULTIMO";
    }
    return $qta;
}

/**
 * showProductTable
 *
 * @param  mixed $catalogo
 * @return void
 */
function showProductTable($catalogo)
{
?>
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
<?php
}

/**
 * showTodayDate
 *
 * @param  mixed $onlyDate
 * @return string
 */
function showTodayDate($onlyDate = true): string
{
    $dayWeek = ['Lun', 'Mar', 'Mer', 'Gio', 'Ven', 'Sab', 'Dom',];
    $month = ['Gen', 'Feb', 'Mar', 'Apr', 'Mag', 'Giu', 'Lug', 'Ago', 'Set', 'Ott', 'Nov', 'Dic'];

    $today = getdate();
    $date = $dayWeek[$today['wday'] - 1] . " " . $today['mday'] . " " . $month[$today['mon'] - 1] . " " . $today['year'];
    if (!$onlyDate) {
        $date = $date . ' - ' . $today['hours'] . ":" . $today['minutes'];
    }
    return $date;
}


function updateFileJson(array $stocksArray, string $path): bool
{
    $jsonString = json_encode($stocksArray);
    $fp = fopen($path, 'w');
    $result = fwrite($fp, $jsonString);
    fclose($fp);
    return $result;
}


/**
 * readFileJson
 *
 * @param  mixed $path
 * @return array
 */
function readFileJson(string $path): array | null
{
    try {
        $jsonString = file_get_contents($path);
        return json_decode($jsonString, true);
    } catch (Exception $e) {
        echo "Il file non esiste.";
        return null;
    }
}