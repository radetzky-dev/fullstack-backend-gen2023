<?php

//Variables
$shopName = "MusaShop";

/**
 * showCategory
 *
 * @param  mixed $catalogo
 * @param  mixed $catName
 * @return void
 */
function showProductsJson(array $catalogo, string $catName): void
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

            $id = "0";
            if (isset($prodotti['id_product'])) {
                $id = $prodotti['id_product'];
            }

            $descrizione = "-";
            if (isset($prodotti['descrizione'])) {
                $descrizione = $prodotti['descrizione'];
            }

            echo "<tr><td>" . $id . "</td><td>" . $qta . "</td><td>" . $prodotti['nome'] . "</td><td>" . $descrizione . "</td><td>" . $price . " €" . "</td><td class='table-primary'>" . strtoupper($catName) . "</td>
            <td><a class='btn btn-primary' " . $buttonStatus . " href='manage_products.php?id=" . $id . "'>Gestisci</a>
            <a class='btn btn-danger' " . $buttonStatus . " href='delete_product.php?id=" . $id . "'>Elimina</a></td>
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


/**
 * getNewIdToInsert
 *
 * @param  mixed $catalogo
 * @return int
 */
function getNewIdToInsert(array $catalogo): int
{
    $id = 0;
    foreach ($catalogo as $catName => $categorie) {
        foreach ($catalogo[$catName] as $key => $value) {
            if ($value["id_product"] > $id) {
                $id = $value["id_product"];
            }
        }
    }

    $id++;
    return $id;
}


/**
 * deleteUpdateProduct
 *
 * @param  mixed $catalogo
 * @param  mixed $id
 * @param  mixed $delete
 * @param  mixed $params
 * @return void
 */
function deleteUpdateProduct($catalogo, $id, $delete = false, $params = null)
{
    foreach ($catalogo as $catName => $categorie) {
        foreach ($catalogo[$catName] as $key => $value) {
            if ($value["id_product"] == $id) {
                //DELETE
                if ($delete) {
                    unset($catalogo[$catName][$key]);
                } else {
                    echo "Eseguo update (TODO)";
                    die();
                }
                break;
            }
        }
    }
    //update
    return updateFileJson($catalogo, "data/products.json");
}
