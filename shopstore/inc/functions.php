<?php
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

function checkIfLast($qta)
{
    if ($qta == 0) {
        return "ESAURITO";
    } elseif ($qta == 1) {
        return "ULTIMO";
    }
    return $qta;
}