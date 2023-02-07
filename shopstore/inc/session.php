<?php
//check if is logged
session_start();

if (empty($_SESSION['userInfo'])) {
    require_once 'login.php';
    exit();
}
