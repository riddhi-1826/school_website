<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location: signin.php');
}

session_destroy();
header('location: signin.php');
?>