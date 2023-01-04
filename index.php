<?php session_start(); ?>
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
<?php
require 'config.php';
$TopProduk = $collection->find();
$Produk = $collection->find();
foreach ($TopProduk as $Prod) {
	$nama = $Prod->Nama;
	$harga = $Prod->Harga;
	$gambar = $Prod->Gambar;
}
?>
<div class="header_section shadow mb-lg-5 bg-white ">
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<div class="logo"><a href="./index.php"><img src="images/logo.png"></a></div>
			</div>
			<div class="col-sm-9 d-flex justify-content-end">
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
						<div class="navbar-nav d-flex">
							<a class="nav-item nav-link" href="./index.php">Home</a>
							<a class="nav-item nav-link last" href="./cart.html">
								<i class="bi bi-bag-fill"></i></a>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</div>
</div>

<body class="">
	<div class="collectipn_section_3 layout_padding">
		<div class="container">
			<div class="racing_shoes">
				<div class="row">
					<div class="col-md-8">
						<div class="shoes-img3"><img src="uploads/<?php echo $gambar ?>"></div>
					</div>
					<div class="col-md-4">
						<div class="sale_text"><strong>Sale <br><span style="color: #0a0506;"><?php echo $nama ?></span></div>
						<div class="number_text"><strong>Rp <?php echo $harga ?><span style="color: #0a0506"></span></strong></div>
						<button class="seemore">Selengkapnya</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="collection_section ">
		<div class="container">
			<h1 class="new_text "><strong>New Arrivals Products</strong></h1>
			<p class="consectetur_text">Nikmati beragam pilihan produk yang menarik dan terbaru</p>
		</div>
	</div>
	<div class="container mw-100" style="background-color: #eee;">
		<div class="row d-flex flex-wrap d-flex justify-content-center">
			<?php
			foreach ($Produk as $pro) {
				echo "<div class='col-sm-3 bg-white m-1'>
				<p class='best_text'>$pro->Nama</p>
				<div class='shoes_icon'><img src='uploads/$pro->Gambar'></div>
				<div class='star_text'>
					<div class='left_part'>
						<ul>
							<li><a href='#'><img src='images/star-icon.png'></a></li>
							<li><a href='#'><img src='images/star-icon.png'></a></li>
							<li><a href='#'><img src='images/star-icon.png'></a></li>
							<li><a href='#'><img src='images/star-icon.png'></a></li>
							<li><a href='#'><img src='images/star-icon.png'></a></li>
						</ul>
					</div>
					<div class='right_part'>
						<div class='shoes_price'><span style='color: #ff4e5b'>$pro->Harga</span></div>
					</div>
				</div>
			</div>";
			}
			?>
			<!-- Product Card -->
		</div>
	</div>

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

</html>