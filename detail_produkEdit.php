<?php session_start();
require 'config.php';

// fetch data
// if (isset($_GET['id'])) {
$mhs = $cart->findOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id'])]);

$harga = $mhs->Harga;
$gambar = $mhs->Gambar;
$kategori = $mhs->Kategori;
$deskripsi = $mhs->Deskripsi;
$berat = $mhs->Berat;
$Stok = $mhs->Qty;
//   }

//   insert ke tabel keranjang
if (isset($_POST['Confirm'])) {
    if ($_POST['Qty'] > 0) { //jumlah berubah
        $cart->updateOne(
            ['_id' => new MongoDB\BSON\ObjectID($_GET['id'])],
            [
                '$set' => [
                    'Qty' => $_POST['Qty']
                ]
            ]
        );
        header("Location: cart.php");
    } else { //jumlah menjadi 0
        $cart->deleteOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id'])]);
    }
    header("Location: cart.php");
}


// 
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
    <!-- Style buat review bintang -->
    <link rel="stylesheet" type="text/css" href="css/star.css">
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
<?php
require 'config.php';
// $Produk = $collection->find();
// foreach ($Produk as $Prod) {
//     if
// }
?>
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
                            <button type="submit" name="add_cart" class="nav-item nav-link last">
                                <i class="bi bi-bag-fill"></i>
                            </button>

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
                <div class="col-10 best_text fw-semibold text-left">
                    <div class="card rounded-3 mb-4">
                        <div class="card-body p-4">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="col-md-2 col-lg-2 col-xl-4">
                                    <img src="uploads/<?php echo $gambar ?>" class="img-fluid rounded-3" alt="Cotton T-shirt">
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-4">
                                    <div class="container row d-flex justify-content-start">
                                        <div class="col-12">
                                            <h6><?php echo $kategori ?></h6>
                                        </div>
                                        <div class="col-12">
                                            <h1><b><?php echo $nama ?></b></h1>
                                        </div>
                                        <div class="col-12 mb-2">
                                            <div class="row">
                                                <div class="col-1">
                                                    <i class="bi bi-star-fill"></i>
                                                </div>
                                                <div class="col-2">
                                                    <h6>5</h6>
                                                </div>
                                                <div class="col-4">
                                                    <h6>Terjual</h6>
                                                </div>
                                                <div class="col-4">
                                                    <h6>72</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <h1><b><?php echo $harga ?></b></h1>
                                        </div>
                                        <div class="col-12">
                                            <div class="row text-center">
                                                <div class="col">
                                                    <h5>Stok</h5>
                                                </div>
                                                <div class="col">
                                                    <h5>Berat</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row text-center">
                                                <div class="col">
                                                    <div class="rounded" style="background-color: rgb(235, 235, 235);">
                                                        <h5 class="pt-2"><?= $mhs->Stok  ?></h5>
                                                    </div>
                                                </div>
                                                <div class="col rounded">
                                                    <div class="rounded" style="background-color: rgb(235, 235, 235);">
                                                        <h5 class="pt-2"><?php echo $berat ?> KG</h5>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 my-3">
                                            <h4>Gaming Store ID</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-4 d-flex">
                                    <div class="container rounded py-3" style="background-color: rgb(232, 232, 232);">
                                        <div class="row">
                                            <div class="col-12 my-2">
                                                <div class="row d-flex justify-content-between">
                                                    <div class="col-4">
                                                        <h5>Jumlah</h5>
                                                    </div>
                                                    <div class="col-4">
                                                        <form method="POST">
                                                            <input type="number" class="col form-control form-control-sm" name="Qty" min="0" max="<?= $mhs->Stok  ?>" placeholder="<?= $mhs->Qty  ?>" value="<?= $mhs->Qty  ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 my-2">
                                                <div class="row d-flex justify-content-between">
                                                    <div class="col-4">
                                                        <h5>Subtotal</h5>
                                                    </div>
                                                    <div class="col-6">
                                                        <h5><?php echo $harga ?></h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 my-2 d-flex justify-content-center">
                                                <button type="submit" name="Confirm" class="btn btn-primary mr-2">confirm</button>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-12 d-flex justify-content-start mt-3">
                                    <h3 class="mr-2"><b>Deskripsi Produk</b></h3>
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-12 d-flex justify-content-center text-center">
                                    <h5 class="mr-1">
                                        <?php echo $deskripsi ?>
                                    </h5>
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-12 d-flex justify-content-start mt-3">
                                    <h3 class="mr-2"><b>Review Produk</b></h3>
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-12 d-flex justify-content-start text-center">
                                    <div class="row">
                                        <div class="col">
                                            <div class="container rounded pt-1" style="background-color: rgb(255, 242, 104);">
                                                <div class="row d-flex justify-content-start">
                                                    <div class="col-2">
                                                        <i class="bi bi-star-fill"></i>
                                                    </div>
                                                    <div class="col-2 pt-2">
                                                        <h5>5</h5>
                                                    </div>
                                                    <div class="col-6 pt-2">
                                                        <h5>Rafli</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="container rounded pt-1" style="background-color: rgb(211, 255, 130);">
                                                <div class="row d-flex justify-content-start">
                                                    <div class="col-2">
                                                        <i class="bi bi-star-fill"></i>
                                                    </div>
                                                    <div class="col-2 pt-2">
                                                        <h5>3</h5>
                                                    </div>
                                                    <div class="col-6 pt-2">
                                                        <h5>Irfan</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="container rounded pt-1" style="background-color: rgb(238, 255, 160);">
                                                <div class="row d-flex justify-content-start">
                                                    <div class="col-2">
                                                        <i class="bi bi-star-fill"></i>
                                                    </div>
                                                    <div class="col-2 pt-2">
                                                        <h5>7</h5>
                                                    </div>
                                                    <div class="col-6 pt-2">
                                                        <h5>Shafa</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
</body>

</html>