<?php
$siteTitle = "Benvenuto nella mia pagina";
$name = "Paolo";
?>
<!DOCTYPE html>
<html lang="ita">

<head>
    <title><?php echo $siteTitle; ?></title>
</head>

<body>
    <p>
        TIME: <?php echo date('H:i'); ?> <br>DAY <?php echo date('d/m/Y'); ?>
        <?php echo "Hello <br> world"; ?>
        <?php echo "<ul><li>list item 1</li><li>list item 2</li><li>" . $siteTitle . "</li></ul>"; ?>
    </p>
    <script>
        alert("Ciao <?php echo $name; ?>");
    </script>
</body>

</html>