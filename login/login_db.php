<!-- check from email and password -->

<?php

require_once "../db.php";

function checkLogin($conn, $email)
{
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();

    $result = $stmt->get_result();
    return $result->fetch_assoc();
}

?>