<?php
$siteTitle ="Benvenuto nella mia pagina";
?>
<!DOCTYPE html>
<html lang="ita">

<head>
    <title><?php echo $siteTitle; ?></title>
</head>

<body>
    <p>
        TIME: <?php echo date('H:i'); ?> <br>DAY <?php echo date('d/m/Y');?>
        <?php echo "Hello world"; ?>
    </p>
</body>

</html>