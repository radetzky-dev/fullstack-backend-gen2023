<?php
require_once "../inc/functions.php";
if (!empty($_POST["login"])) {
    session_start();
    $username = $_POST["user_name"];
    $password = $_POST["password"];

    $isLoggedIn = false;
    $myAnagr = readFileJson("../data/users.json");

    foreach ($myAnagr as $key => $userArray) {
        if ($userArray['username'] == $username && $userArray['pwd'] == $password) {
            $isLoggedIn = true;
            $_SESSION["userId"] = $key;
            $_SESSION["isAdmin"] = true;
            $_SESSION["userInfo"] = $userArray['nome'] . ' ' . $userArray['cognome'];
        }
    }
    if (!$isLoggedIn) {
        $_SESSION["errorMessage"] = "Username o password non valide!";
        header("Location: login.php");
    } else {
        header("Location: ../index.php");
    }
}
