<?php
session_start();

require_once("admin/db_connection.php");

// Check if the user is logged in
if (!isset($_SESSION["loginUser"])) {
    echo "<script>window.location.href = 'authentication.php';</script>";
    exit;
}

 

?>