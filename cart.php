<?php session_start();
require 'config.php';
// function 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Shoes</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- header section start -->
<div class="header_section shadow mb-lg-5 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="logo"><a href="#"><img src="images/logo.png"></a></div>
            </div>
            <div class="col-sm-9 d-flex justify-content-end">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav d-flex">
                            <a class="nav-item nav-link" href="index.php">Home</a>
                            <a class="nav-item nav-link last" href="cart.php">
                                <i class="bi bi-bag-fill"></i></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>

<body class="main-layout"></body>
<section class="h-100" style="background-color: #eee;">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-10">
                <div class="collection_text">Keranjang</div>


                <?php
                $Produk = $cart->find();
                foreach ($Produk as $pro) {
                    echo "
                <div class='card rounded-3 mb-4'>
                    <div class='card-body p-4'>
                        <div class='row d-flex justify-content-between align-items-center'>
                            <div class='col-md-2 col-lg-2 col-xl-2'>
                                <img src='uploads/$pro->Gambar'>
                            </div>
                            <div class='col-md-3 col-lg-3 col-xl-3'>
                                <p class='lead fw-normal mb-2 best_text'>$pro->Nama</p>

                            </div>
                            <div class='col-md-3 col-lg-3 col-xl-2 d-flex'>
                                <h5 class='mb-0'>$pro->Qty</h5>
                                <h5 class='mb-0'>x</h5>
                            </div>
                            <div class='col-md-3 col-lg-3 col-xl-2 d-flex'>
                                <h5 class='mb-0'>$pro->Subtotal</h5>
                            </div>
                            <div class='col-md-1 col-lg-1 col-xl-1 text-end'>
                            <a href = 'detail_produkEdit.php?id=" . $pro->_id . "'>edit</a>
                            </div>
                        </div>
                    </div>
                </div>";
                }
                ?>
                <div class="card d-flex justify-content-center">
                    <div class="card-body d-flex justify-content-center text-center">
                        <a href="pemesanan.php" class="seemore">Check Out</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Javascript files-->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery-3.0.0.min.js"></script>
<script src="js/plugin.js"></script>
<!-- sidebar -->
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/custom.js"></script>
<!-- javascript -->
<script src="js/owl.carousel.js"></script>
<script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script>
    $(document).ready(function() {
                $(".fancybox").fancybox({
                    openEffect: "none",
                    closeEffect: "none"
                });



                $('#myCarousel').carousel({
                    interval: false
                });

                //scroll slides on swipe for touch enabled devices

                $("#myCarousel").on("touchstart", function(event) {

                    var yClick = event.originalEvent.touches[0].pageY;
                    $(this).one("touchmove", function(event) {

                        var yMove = event.originalEvent.touches[0].pageY;
                        if (Math.floor(yClick - yMove) > 1) {
                            $(".carousel").carousel('next');
                        } else if (Math.floor(yClick - yMove) < -1) {
                            $(".carousel").carousel('prev');
                        }
                    });
                    $(".carousel").on("touchend", function() {
                        $(this).off("touchmove");
                    });
                });
</script>
</body>

</html>