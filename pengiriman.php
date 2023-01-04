<?php session_start();
require 'config.php';
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
    <title>Pullshoes</title>
    <meta name="keywords" content="best_text">
    <meta name="description" content="best_text">
    <meta name="author" content="best_text">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
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
<!-- body -->
<div class="header_section shadow mb-lg-5 bg-white ">
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

<body class="main-layout">
    <section class="h-100" style="background-color: #eee;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-10 best_text fw-semibold text-left mb-5">
                    <div class="collection_text">Pengiriman</div>
                    <div class="card rounded-3 mb-4">
                        <div class="card-body p-4">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="col-md-3 col-lg-3 col-xl-12 d-flex">
                                    <div class="collection_text3">
                                        <div class="col-12">
                                            <h3>
                                                <b>
                                                    Sedang transit
                                                </b>
                                            </h3>
                                            <h4>
                                                Estimasi Kedatangan :
                                                <b>
                                                    6 Januari 2023
                                                </b>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-12 d-flex justify-content-end mt-3">
                                    <h4 class="mr-2">ID</h5>
                                        <h4 class="mb-0">013F8SN3248Q1</h5>
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-12 d-flex justify-content-start">
                                    <i class="bi bi-geo-alt-fill mr-2"></i>
                                    <h3 class="">Alamat Pengiriman</h3>
                                    <h3 class="mx-2">-</h3><b></b>
                                    <h3 class="mr-2"><b>Nama Pemesanan</b></h3>
                                    <h3 class="">(08123456789)</h3>
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-12 d-flex justify-content-start">
                                    <h5 class="mr-2">Jalan Setiabudi No. 19. Bandung. Indonesia</h5>
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-12 my-2 d-flex justify-content-center" style="background: rgb(235, 235, 235); width: 70%;">
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-12 d-flex justify-content-start">
                                    <h2 class="mr-2"><b>Nama Toko</b></h2>
                                </div>
                                <!-- Section 1 -->
                                <!-- loop  -->
                                <?php
                                $total = 0;
                                $Produk = $cart->find();
                                foreach ($Produk as $pro) {
                                    echo "<div class='row container-fluid d-flex justify-content-between align-items-center'>
                                    <div class='col-md-2 col-lg-2 col-xl-2 ml-3'>
                                        <img src='uploads/$pro->Gambar' class='img-fluid rounded-3'>
                                    </div>
                                    <div class='col-md-5 col-lg-3 col-xl-2 d-flex'>
                                        <div class='row d-flex justify-content-start'>
                                            <h5 class='mt-3 col-4'>x</h5>
                                            <h5 class='mt-3 col-4'>$pro->Qty</h5>
                                            <h5 class='col-12' style='color: grey;'>Rp$pro->Harga</h5>
                                        </div>
                                    </div>
                                    <div class='col-md-5 col-lg-2 col-xl-2 offset-lg-1 text-center'>

                                        <h5 class='mb-0'><b>Rp$pro->Subtotal</b></h5>
                                    </div>
                                </div>";
                                }

                                ?>
                                <div class="my-3 col-md-3 col-lg-3 col-xl-12 my-2 d-flex justify-content-center" style="background: rgb(212, 212, 212); width: 70%;">
                                </div>
                                <!-- Section 2 -->
                                <div class="col-md-3 col-lg-3 col-xl-6 d-flex">
                                    <h4 class="mb-0">Subtotal</h4>

                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-6 d-flex justify-content-end">
                                    <h4 class="mb-0">RP
                                        <?php echo $pro->Subtotal; ?>
                                    </h4>
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-6 d-flex">
                                    <h4 class="mb-0">Pengiriman</h4>

                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-6 d-flex justify-content-end">
                                    <h4 class="mb-0">RP 10.000</h4>
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-6 d-flex">
                                    <h4 class="mb-0"><b>Total</b></h4>

                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-6 d-flex justify-content-end">
                                    <h4 class="mb-0"><b>Rp <?php echo $pro->Subtotal + 10000; ?>
                                        </b></h4>
                                </div>
                                <!-- Section 3 -->
                                <div class="my-3 col-md-3 col-lg-3 col-xl-12 my-2 d-flex justify-content-center" style="background: rgb(212, 212, 212); width: 70%;">
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-6 d-flex">
                                    <h4 class="mb-0">Nomor Pemesanan</h4>
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-6 d-flex justify-content-end">
                                    <h4 class="mb-0"> <?php echo $pro->_id; ?>
                                    </h4>
                                </div>

                                <div class="col-md-3 col-lg-3 col-xl-6 d-flex">
                                    <h4 class="mb-0">Tanggal Pemesanan</h4>
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-6 d-flex justify-content-end">
                                    <h4 class="mb-0">05-01-2023 11:00 AM</h4>
                                </div>

                                <div class="col-md-3 col-lg-3 col-xl-6 d-flex">
                                    <h4 class="mb-0">Metode Pembayaran</h4>
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-6 d-flex justify-content-end">
                                    <h4 class="mb-0"> <?php echo $pro->Metode_bayar; ?>
                                    </h4>
                                </div>

                                <div class="col-md-3 col-lg-3 col-xl-6 d-flex">
                                    <h4 class="mb-0">Tanggal Pembayaran</h4>
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-6 d-flex justify-content-end">
                                    <h4 class="mb-0">05-01-2023 11:00 AM</h4>
                                </div>

                                <div class="col-md-3 col-lg-3 col-xl-6 d-flex">
                                    <h4 class="mb-0">Nomor Pelacakan</h4>
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-6 d-flex justify-content-end">
                                    <h4 class="mb-0">Jvt686xxxxxx</h4>
                                </div>
                            </div>
                            <div class="container bg-white mt-3">
                                <div class="card-body d-flex justify-content-center ">
                                    <button class="seemore rounded" type="submit" name="pesan">
                                        <a href="form_review.php" class="btn"> Pesanan Selesai
                                        </a>
                                    </button>
                                    </form>
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
    <script src="js/star.js"></script>
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

    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {

                var reader = new FileReader();

                reader.onload = function(e) {
                    $('.image-upload-wrap').hide();

                    $('.file-upload-image').attr('src', e.target.result);
                    $('.file-upload-content').show();

                    $('.image-title').html(input.files[0].name);
                };

                reader.readAsDataURL(input.files[0]);

            } else {
                removeUpload();
            }
        }

        function removeUpload() {
            $('.file-upload-input').replaceWith($('.file-upload-input').clone());
            $('.file-upload-content').hide();
            $('.image-upload-wrap').show();
        }
        $('.image-upload-wrap').bind('dragover', function() {
            $('.image-upload-wrap').addClass('image-dropping');
        });
        $('.image-upload-wrap').bind('dragleave', function() {
            $('.image-upload-wrap').removeClass('image-dropping');
        });
    </script>

</body>

</html>