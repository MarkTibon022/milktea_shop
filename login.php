<?php
session_start();


if(isset($_POST['login'])) {
    header('location: pages/home.php');
}


?>
<!-- html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Document</title>
</head>
<body>
    <div class="container-lg">
        <div class="cont-form">
        <form action="" method="post">
            <div class="title-form">
                <h1>Log in</h1>
            </div>
            <div class="head-form">
            <input type="text" placeholder="Email" name="email" value="" required>
            <input type="password" placeholder="Password" name="password" value="" required>
            </div>
            <div class="body-form">
                <a href="" class="">forget password</a>
                <a href="./pages/signup.php" class="">sign up</a>
                <input type="submit" name="login" value="Login">
            </div>
        </form>
        </div>
    </div>
</body>
    <script src="css/bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
</html>