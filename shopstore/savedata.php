<?php
session_start();
echo "Save data...<br>";

echo "<pre>";
print_r($_SESSION['userData']);
echo "</pre>";

//echo dei dati rispecare $_SESSION Name ecc per poi salvarli un file json 