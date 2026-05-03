<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_registration";

try {
    $conn = new mysqli($servername, $username, $password, $dbname);
} catch (Exception $e) {
    die("Connection failed: " . $e->getMessage());
}
