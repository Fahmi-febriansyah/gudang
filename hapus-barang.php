<?php 
session_start();
if (!$_SESSION['berhasil']) {
	header("location: login.php");
}
$koneksi = mysqli_connect("localhost","root","","gudang_terpal");

$id = $_GET['id'];

$hapus = mysqli_query($koneksi,"DELETE FROM barang WHERE id_barang = '$id'");

if ($hapus) {
	echo "<script>
	alert('Berhasil di hapus');
	document.location.href = 'barang.php'
	</script>";
}else{
	echo "<script>
	alert('gagal dihapus');
	document.location.href = 'barang.php'
	</script>";
}




?>