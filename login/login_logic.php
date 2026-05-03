<?php
require_once("login_db.php");

if (isset($_SESSION['success'])) {
    header("Location: ../index.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = trim($_POST["email"]);
    $password = $_POST["password"];

    if ($email == "" || $password == "") {
        $_SESSION["error"] = "Please fill in all fields.";
        $_SESSION['old_email'] = $email;
        header("Location: login.php");
        exit();
    }

    $user = checkLogin($conn, $email);

    if ($user) {
        if (password_verify($password, $user['password'])) {
            $_SESSION['success'] = 'yes';
            $_SESSION['email_logged_in'] = $email;

            // set session for 1 month
            $_SESSION['email_logged_in'] = $email;
            $_SESSION['success'] = 'yes';

            setcookie("user_email", $email, time() + (30 * 86400), "/");
            header("Location: ../index.php");
            exit();
        } else {
            $_SESSION["error"] = "Incorrect password.";
        }
    } else {
        $_SESSION["error"] = "Email not found.";
    }

    $_SESSION['old_email'] = $email;
    header("Location: login.php");
    exit();
}
