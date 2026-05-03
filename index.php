<?php
session_start();

if (!isset($_SESSION["email_logged_in"])) {
    header("Location: registration/registration.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-11 col-md-8 text-center">

                <h1 class="mb-4">Welcome to the Dashboard!</h1>

                <div class="alert alert-success shadow-sm">
                    <p class="mb-0">You have successfully logged in.</p>
                </div>

                <div class="mt-5 ">
                    <a href="login/logout.php" class="btn btn-danger btn-lg px-5 shadow btn-block">Logout</a>
                </div>

            </div>
        </div>
    </div>

</body>

</html>