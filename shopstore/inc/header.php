<?php
//check if is logged
session_start();
if (empty($_SESSION["userId"])) {
    require_once 'login.php';
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$shopName;?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <container>
        <div class="container">