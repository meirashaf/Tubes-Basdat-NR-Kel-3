<?php session_start();
if (isset($_POST['submit'])) {
    require 'config.php';
    $direktori = "uploads/";
    $file_name = $_FILES['Gambar']['name'];
    move_uploaded_file($_FILES['Gambar']['tmp_name'], $direktori . $file_name);
    $insertOneResult = $collection->insertOne([
        'Nama' => $_POST['Nama'],
        'Deskripsi' => $_POST['Deskripsi'],
        'Kategori' => $_POST['Kategori'],
        'Berat' => $_POST['Berat'],
        'Stok' => $_POST['Stok'],
        'Harga' => $_POST['Harga'],
        'Gambar' => $file_name,
    ]);
    $_SESSION['success'] = "Data Mahasiswa Berhasil di tambahkan";
    header("Location: index.php");
}
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
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->
</head>
<!-- header section start -->
<div class="header_section shadow mb-lg-5 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="logo"><a href="./index.php"><img src="images/logo.png"></a></div>
            </div>
            <div class="col-sm-9 d-flex justify-content-end">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav d-flex">
                            <a class="nav-item nav-link" href="admin.php">Produk</a>
                            <a class="nav-item nav-link" href="acc_bayar.html">Konfirmasi Pembayaran</a>
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
                    <form method="POST" enctype="multipart/form-data">

                        <div class="mb-3 ">
                            <label for="formGroupExampleInput" class="form-label " style="color: #221F20">Nama
                                Produk</label>
                            <input type="text" class="form-control" name="Nama" id="formGroupExampleInput" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label" style="color: #221F20">Deskripsi
                                Produk</label>
                            <textarea class="form-control" name="Deskripsi" id="exampleFormControlTextarea1" rows="3" placeholder=""></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label" style="color: #221F20">Gambar</label>
                            <input class="form-control" name="Gambar" type="file">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label" style="color: #221F20">Kategori </label>
                            <select class="form-select" name="Kategori" aria-label=".form-select-lg example">
                                <option selected>Pilih Kategori</option>
                                <option value="Sport">Sport</option>
                                <option value="Pakaian">Pakaian</option>
                                <option value="Dapur">Dapur</option>
                            </select>
                        </div>
                        <div class="mb-3 row">
                            <div class="mr-3 col">
                                <label for="formGroupExampleInput" class="form-label" style="color: #221F20">Berat</label>
                                <input type="number" name="Berat" class="form-control" id="formGroupExampleInput" placeholder="gram">
                            </div>
                            <div class="col">
                                <label for="formGroupExampleInput" class="form-label" style="color: #221F20">Stok</label>
                                <input type="number" name="Stok" class="form-control" id="formGroupExampleInput" placeholder="">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label" style="color: #221F20">Harga</label>
                            <input type="number" class="form-control" name="Harga" id="formGroupExampleInput" placeholder="">
                        </div>
                        <div class="card-body d-flex justify-content-center ">
                            <button type="submit" name="submit" class="seemore" value="Upload">Tambah</button>
                        </div>
                    </form>
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
    <!-- <script src="js/custom.js"></script> -->
    <!-- javascript -->
    <script src="js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

</html>