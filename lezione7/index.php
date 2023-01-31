<?php
session_start();
if (!empty($_SESSION["userId"])) {
    echo "Bentornato";
} else {
    echo "Devi loggarti!";
}
