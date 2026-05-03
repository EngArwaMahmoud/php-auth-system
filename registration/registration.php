<?php
include "registration_logic.php";
session_start();
if (isset($_SESSION['success'])) {
    unset($_SESSION['success']);
    header("Location: ../index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
</head>

<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-11 col-md-8 col-lg-12">

                <h2 class="text-center mb-4">Registration Form</h2>

                <?php
                if (!empty($errors)) {
                    foreach ($errors as $error) {
                        echo '<div class="alert alert-danger">' . $error . '</div>';
                    }
                }

                if (isset($success) && $success) {
                    echo '<div class="alert alert-success">Registration successful!</div>';
                }
                ?>

                <form method="POST">

                    <div class="form-group">
                        <input type="text" name="username" class="form-control mb-2" placeholder="Full Name"
                            value="<?php echo isset($fullname_value) ? $fullname_value : ''; ?>">
                    </div>

                    <div class="form-group">
                        <input type="email" name="email" class="form-control mb-2" placeholder="Email"
                            value="<?php echo isset($email_value) ? $email_value : ''; ?>">
                    </div>

                    <div class="form-group">
                        <input type="password" name="password" class="form-control mb-2" placeholder="Password">
                    </div>

                    <div class="form-group">
                        <input type="password" name="confirm_password" class="form-control mb-2"
                            placeholder="Confirm Password">
                    </div>

                    <div class="form-btn">
                        <button class="btn btn-primary btn-block">Register</button>
                    </div>

                    <div class="text-center">
                        <p class="mt-3">Already have an account? <a href="../login/login.php">Login here</a></p>
                    </div>
                </form>

            </div>
        </div>
    </div>

</body>

</html>