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

<?php
require 'config.php';
$Bayar = $order->find();
foreach ($Bayar as $byr) {
}

// echo $byr->_id;

// echo $byr->Metode_bayar;
// echo "1235 8316 8282 8929";
// echo "Pending";

$Bayar = $order->find();
foreach ($Bayar as $byr) {
}

$pay->insertOne([
    'id' => $byr->_id,
    'Metode_bayar' => $byr->Metode_bayar,
    'no_va' => '1235 8316 8282 8929',
    'Status_bayar' => 'pending',
    'Nominal' => $byr->Total
]);
// echo $byr->Total;
?>

<body class="main-layout">
    <section class="h-100" style="background-color: #eee;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-10 best_text fw-semibold text-left mb-5">
                    <div class="collection_text">Menunggu Pembayaran</div>
                    <div class="card rounded-3 mb-4">
                        <div class="card-body p-4">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="col-md-3 col-lg-3 col-xl-6 d-flex">
                                    <h4 class="mb-0">Total : </h5>
                                        <h4 class="mb-0 mx-3"><b><?php echo $byr->Total; ?></b></h5>
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-6 d-flex justify-content-end">
                                    <h4 class="mr-2">ID</h5>
                                        <h4 class="mb-0"><?php echo $byr->_id; ?></h5>
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-12 d-flex justify-content-start">
                                    <h5 class="mr-2">Bayar sampai dengan 23h 59m sebelum kedaluarsa</h5>
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-12 d-flex justify-content-start">
                                    <h2 class="mr-2"><b>No. Virtual Account</b></h2>
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-12 d-flex justify-content-center">
                                    <div class="collection_text2 row">
                                        <div class="col-12">
                                            <h1 style="color:white">
                                                1235 8316 8282 8929
                                            </h1>
                                            <hr class="hr-white">
                                            <h1 style="color: white;">
                                                <b>
                                                    <?php echo $byr->Metode_bayar; ?>
                                                </b>
                                            </h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-12 mt-5 d-flex justify-content-center text-center">
                                    <!-- <h5 class="mr-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h5> -->
                                </div>
                                <div class="container bg-white mt-3">
                                    <div class="card-body d-flex justify-content-center ">
                                        <button class="seemore rounded">
                                            <a href="./pengiriman.php">Pengiriman</a>
                                        </button>
                                    </div>
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