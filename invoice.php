<?php 
session_start();
if (!$_SESSION['berhasil']) {
	header("location: login.php");
}
$id = $_GET['id'];
$koneksi = mysqli_connect("localhost","root","","gudang_terpal");
$kuari = mysqli_query($koneksi,"SELECT * FROM transaksi WHERE pembeli = '$id' AND paid = '1'");
$data = mysqli_fetch_assoc($kuari);
$pas = 0;
$total = $data['harga'] * $data['jumlah'];
?>
<!DOCTYPE html>
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
</head>
<body>
	<div class="container">
		<h2 align="center">Invoice Pembelian</h2>
		<hr />
		<img src="asset/img/logo.png" width="50"> 
		<br>
		<p>dari : UD.Lancar Jaya Terpal</p>
		<br>
		<p>Untuk : <?php echo $data['pembeli']; ?></p>
		<p style=" float: right; position: relative; top: -100px; ">Tanggal : <?php echo $data['tanggal']; ?></p>
		<hr />
	</div>
	<div class="container">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th scope="col">No</th>
					<th scope="col">Type</th>
					<th scope="col">Ukuran</th>
					<th scope="col">Jumlah</th>
					<th scope="col">Total</th>
					<th scope="col">jumlah</th>
				</tr>
			</thead>
			<tbody>
				<?php $tambah = 1;

				$kuara = mysqli_query($koneksi,"SELECT * FROM transaksi WHERE pembeli = '$id'");
				while ($data = mysqli_fetch_assoc($kuara)){ 
					$pas += $total;
					?>

					<tr>
						<td><?php echo $tambah ?></td>
						<td><?php echo $data['type'] ?></td>
						<td><?php echo $data['ukuran'] ?></td>
						<td><?php echo $data['jumlah'] ?></td>
						<td>Rp.<?php echo $data['harga'] ?></td>
						<td>Rp.<?php echo $data['harga'] * $data['jumlah'] ?></td>

					</tr>
					<?php $tambah++; ?>
				<?php } ?>
				<tr>
					<td colspan="6" align="right">jumlah : Rp<?php echo $pas ?></td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="container" align="center" style="">
		<button type="button" onclick="window.print()" class="btn btn-primary">Print Invoice</button>
		<a href="transaksi.php"><button type="button" class="btn btn-primary">Kembali</button></a>
	</div>



	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>	
</body>	
</html>