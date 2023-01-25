<?php
require_once "inc/functions.php";
require_once "data/data.php";
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
            <button class='btn btn-primary'>Aggiungi prodotto</button>
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