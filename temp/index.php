<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
	<title>APLIKASI INTERAKTIF</title>
	<link rel="stylesheet" href="./vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
</head>

<body>
	<div class="container">
		<br>
		<CENTER>
			<h1>Data Mahasiswa</h1>
		</CENTER>
		<a href="create.php" class="btn btn-success">Tambah Mahasiswa</a>
		<?php
		if (isset($_SESSION['success'])) {
			echo "<div class='alert alert-success'>" . $_SESSION['success'] . "</div>";
		}
		?>
		<table class="table">
			<thead class="thead-dark">
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Nama</th>
					<th scope="col">Harga</th>
					<th scope="col">Aksi</th>
				</tr>
			</thead>
			<?php
			require 'config.php';
			$Produk = $collection->find();
			foreach ($Produk as $mhs) {
				echo "<tr>";
				echo "<th scope='row'>" . $mhs->_id . "</th>";
				echo "<td>" . $mhs->Nama . "</td>";
				echo "<td>" . $mhs->Harga . "</td>";
				echo "<td>";
				echo "<a href = 'edit.php?id=" . $mhs->_id . "'class='btn btn-primary'>EDIT</a>";
				echo "<a href = 'hapus.php?id=" . $mhs->_id . "'class='btn btn-danger'>HAPUS</a>";
				echo "</td>";
				echo "</tr>";
			}
			?>
		</table>
	</div>
</body>

</html>