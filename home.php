<?php
session_start();


if(isset($_SESSION["Name"])) {
    echo "hello" ." ".$_SESSION["Name"];
}
?>
<!-- html -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/home.css">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-light">
        <div class="container-lg">
            <a href="#">
                <img src="../image/navlogo.png" class="img-flid"  height="50"  alt="">
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#show" aria-controls="#show" aria-expanded="fflush">hello</button>
            <div class="collapse navbar-collapse" id="show">
                <ul class="navbar-nav mx-5 my-0">
                    <li class="nav-item">
                        <a href="#" class="nav-link active">Home</a>
                    </li>
                    <li class="nav-item ">
                        <a href="#" class="nav-link"> Product</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link ">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link ">About Us</a>
                    </li>
                </ul>
            </div>
            <button type="button" class="btn p-1 user-btn" data-bs-toggle="modal" data-bs-target="#user">
                <img src="../icon/user-circle-regular-24.png" alt="">
            </button>

            <div class="modal fade" id="user" tabindex="-1" aria-labelledby="user" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="user"><?php $_SESSION["name"] = $row = ["name"];?></h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
            </div>

            <button type="button" class="btn p-1">
                <img src="../icon/shopping-cart.png" alt="" class="img-fluid" style="width: 1.3rem;">
            </button>
        </div>
    </nav>

    <div class="home">
        <div class="container-lg">
            <div class="home-text text-center py-2">
                <h1 class="text-uppercase text-light fw-bold py-2 m-0">welcome to <img src="../image/home-img.png" alt="" class="py-2 img-fluid"></h1>
                <p class="text-uppercase text-light mb-3">Sip into Bliss: Your Perfect Brew Awaits!</p>
                <button type="button" class="btn btn-outline-light py-2">Order now!</button>
            </div>
            <h1 class="m-3 text-center text-dark text-uppercase fw-bolder">big sale product</h1>
            <div class="row mt-3 d-flex justify-content-center align-items-center">
                <div class="col-4">
                    <div class="img-h text-center">
                        <img src="../image/p6.png" alt="" class="img-fluid img-hh" style="width: 11rem;">
                        <p class="m-0 text-light text-uppercase">c-2</p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="img-h text-center">
                        <img src="../image/p5.png" alt="" class="img-fluid" style="width: 14rem;">
                        <p class="m-0 text-light text-uppercase">c-1</p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="img-h text-center">
                        <img src="../image/p7.png" alt="" class="img-fluid" style="width: 11rem;">
                        <p class="m-0 text-light text-uppercase">c-3</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- user info -->
    <div class="user-info">
        <img src="../icon/user-circle-regular-24.png" alt="">
        <p>name</p>
        <p>phone no.</p>
        <p>addres</p>
        <p>birthday</p>
    </div>
</body>
    <script src="../js/home.js"></script>
    <script src="../css/bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
</html>