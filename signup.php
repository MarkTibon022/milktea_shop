<?php
session_start();



if(isset($_POST["signup"])) {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
      $sql = "INSERT INTO `euser`(`Name`, `Email`, `Password`, `Cpassword`) VALUES ('$name','$email','$password','$cpassword')";
     $user = $con->query($sql) or die ($con->error);
    header("location: home.php");
    $_SESSION["Name"] = $row["name"];
}




?>
<!-- html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/signup.css">
    <title>Document</title>
</head>
<body>
<div class="container-lg">
        <div class="cont-form">
        <form action="" method="post">
            <div class="title-form">
                <h1>sign up</h1>
            </div>
            <div class="head-form">
            <input type="text" placeholder="NAme" name="name" required>
            <input type="text" placeholder="Email" name="email" required>
            <input type="pasword" placeholder="Password" name="password" required>
            <input type="pasword" placeholder="Comfirm Password" name="cpassword" required>
            <div class="icon">
            <a href="#"><img src="../icon/facebook.png" class="s-con" alt=""></a>
            <a href="#"><img src="../icon/google.png" class="s-con" alt=""></a>
            <a href="#"><img src="../icon/twitter.png" class="s-con" alt=""></a>
            </div>
            </div>
            <div class="body-form">
            <a href="../index.php" class="">Log In</a> 
                <input type="submit" name="signup" value="signup">
            </div>
        </form>
        </div>
    </div>
</body>
</html>