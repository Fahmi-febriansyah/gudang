<?php
$koneksi = mysqli_connect("localhost","root","","gudang_terpal");
$a2 = 5000;
$a3 = 7000;
$a5 = 9000;
$a12 = 14000;
if (isset($_POST['submit'])) {
	$type = $_POST['tipe'];
	$ukuran1 = $_POST['harga1'];
	$ukuran2 = $_POST['harga2'];
	$ukuran4 = $ukuran1.$ukuran2;
	$ukuran3 = $ukuran1 * $ukuran2;
	$hasil = $ukuran3 * 
	$pembeli = $_POST['pembeli'];

	echo $ukuran3;
}

?>
<!doctype html>
	<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="asset/style.css">
		<script src="https://kit.fontawesome.com/012b9e56ab.js" crossorigin="anonymous"></script>

		<title>Ud.lancar jaya terpal</title>
		<link rel="icon" href="asset/img/logo.png">
		<style>
		body{
			background-image: url("asset/img/bg.jpg");
			background-repeat: no-repeat;
			background-size: cover;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #141F31;">
		<div class="container py-2">
			<a class="navbar-brand font-weight-bold" href="#">UD. Lancar Jaya Terpal</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav ml-auto">
					<a class="nav-link btn btn-danger font-weight-bold" href="login.php" onclick="return confirm('apakah anda yakin?');">Admin</a>
				</div>
			</div>
		</div>
	</nav>
	<div class="container mt-5">

		<div class="header p-3 text-white m-2" style="background-color: #141F31;">INPUT DATA TRANSAKSI</div>
		<form method="POST" class="p-3 shadow m-2">
			<div class="form-group my-3">
				<label for="basic-url">type</label>
				<select class="form-control" id="tipe" name="tipe">
					<option value="a2" >a2</option>
					<option value="a3" >a3</option>
					<option value="a5" >a5</option>
					<option value="a12">a12</option>
				</select>
			</div>
			<div class="form-group my-3">
				<label for="basic-url">Ukuran</label><br>
				<input type="text" name="harga1" size="1" > xx <input type="text" name="harga2" size="1" >
			</div>
			<div class="form-group my-3">
				<label for="basic-url">Nama Pembeli</label>
				<input type="text" name="pembeli" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="Masukkan nama anda">
			</div>
			<button class="btn px-4 mt-4 text-white" style="background-color: #141F31;" name="submit" id="submit">Tambah</button>

		</form>

	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>