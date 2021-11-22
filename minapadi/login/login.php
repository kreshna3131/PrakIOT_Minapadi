<?php
session_start();
require 'fungsi.php';

if (isset($_SESSION["login"])) {
    header("Location: indexlogin.php");
    exit;
}
if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
    $chek = mysqli_num_rows($result);

    if($chek>0){
        header("location: indexlogin.php");
    }else{
        header("location: login.php");
        $error = true;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
    <form action="" method="post">
        <div class="login-page">
            <?php if (isset($error)) : ?>
                <center><div class='alert'><p>Username dan Password anda salah !!</p></div></center>
            <?php endif; ?>
            <div class="form">
                <h1>MinaPadi</h1>
                <div class="login-form">
                    <div class="username">
                        <input type="username" name="username" id="username" placeholder="Username">
                    </div>
                    <div class="password">
                        <input type="password" name="password" id="password" placeholder="Password">
                    </div>
                </div>
                <button class="signin-button" type="submit" name="login">Login</button>
            </div>
        </div>
    </form>

</body>

</html>
