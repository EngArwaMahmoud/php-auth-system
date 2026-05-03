<?php
require_once "../db.php";

// check email
function checkEmail($conn, $email)
{
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    return $stmt->get_result();
}

// insert user
function insertUser($conn, $name, $email, $password)
{
    $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $name, $email, $password);
    return $stmt->execute();
}
