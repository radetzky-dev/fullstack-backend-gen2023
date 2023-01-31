<?php
require_once "inc/functions.php";
if (!empty($_POST["login"])) {
    session_start();
    $username = $_POST["user_name"];
    $password = $_POST["password"];

    $isLoggedIn = false;
    //TODO andare a eseguire leggere dal file JSON user e password e confrontarle con quelle inserie

    // $myAnagr = readFileJson("data/anagrafica.json");
    //scorrere anagrafica e cercare user e pwd se quali a quelle inserite
    if ($username === "test" && $password === "test") {
        $isLoggedIn = true;
        //Inserire qui nome e id
        $_SESSION["userId"] = "1";
        $_SESSION["userInfo"] = "Mario Rossi";
    }

    if (!$isLoggedIn) {
        $_SESSION["errorMessage"] = "Username o password non valide!";
    }

   header("Location: index.php");
}