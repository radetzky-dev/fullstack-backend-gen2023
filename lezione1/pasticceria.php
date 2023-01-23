<?php
$siteTitle = "Pasticceria Musa";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $siteTitle; ?></title>
</head>

<body>
    <?php
    $a = 2.50;
    $b = 1.50;
    $c = 3.20;
    $nome = "Antonio";
    echo "Ciao, " . $nome . "<br>";
    echo "<table border=1 cellspacing=0 cellpading=0>
<tr> <td><font color=blue>Bignè alla Crema Chantilly su Salsa di Fragole</td> <td>€ $a </font></td></tr>
<tr> <td><font color=blue>Bignè alla Frutta</td> <td>€ $b </font></td></tr>
<tr> <td><font color=blue>Biscotti ai Pistacchi</td> <td>€ $c </font></td></tr>
</table>";
    ?>

</body>

</html>