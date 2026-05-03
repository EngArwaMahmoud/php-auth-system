<?php
include "registration_db.php";

$errors = [];
$success = false;

$fullname_value = "";
$email_value = "";

function CheckPasswordStrength($password)
{
    $regex_strong = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^\w]).{8,}$/";

    if (preg_match($regex_strong, $password)) {
        return "Strong";
    }
    return "Weak";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullname = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    $fullname_value = $fullname;
    $email_value = $email;

    // 1. empty check
    if (empty($fullname) || empty($email) || empty($password) || empty($confirm_password)) {
        $errors[] = "All fields are required.";
    }

    // 2. email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    // // 3. password strength
    // if (CheckPasswordStrength($password) != "Strong") {
    //     $errors[] = "Password must be strong.";
    // }

    // 4. confirm password
    if ($password !== $confirm_password) {
        $errors[] = "Passwords do not match.";
    }

    // 5. check email in DB
    $result = checkEmail($conn, $email);

    if ($result->num_rows > 0) {
        $errors[] = "Email already exists.";
        $email_value = "";
    }

    // 6. insert
    if (count($errors) == 0) {

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $success = insertUser($conn, $fullname, $email, $hashed_password);

        if ($success) {
            $fullname_value = "";
            $email_value = "";
        }
    }
}
