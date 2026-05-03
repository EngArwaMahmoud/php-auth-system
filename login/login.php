<?php
session_start();
require_once "login_logic.php";

$email = isset($_SESSION['old_email']) ? $_SESSION['old_email'] : "";
unset($_SESSION['old_email']);

if (isset($_SESSION['email_logged_in'])) {
    header("Location: ../index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
</head>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-11 col-md-6 col-lg-12 login-container">

            <h2 class="text-center mb-4">Login</h2>

            <form action="login.php" method="post">

                <?php
                if (isset($_SESSION["error"])) {
                ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <?php echo $_SESSION["error"]; ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php
                    unset($_SESSION["error"]);
                }
                ?>

                <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter Email:"
                        value="<?php echo $_COOKIE['user_email'] ?? ''; ?>">
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter Password:">
                </div>

                <div class="form-btn">
                    <input type="submit" value="Login" class="btn btn-primary btn-block" name="login">
                </div>

                <p class="mt-4 text-center">Don't have an account? <a href="../registration/registration.php">Register
                        here</a></p>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
</body>

</html>