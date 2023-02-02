<?php
session_start();
$_SESSION["user_id"] = "";
$_SESSION["isAdmin"] = false;
$_SESSION["userInfo"] ="";
session_destroy();
header("Location: index.php");