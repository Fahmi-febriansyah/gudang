<?php 
session_start();
if (!$_SESSION['berhasil']) {
	header("location: login.php");
}
$koneksi = mysqli_connect("localhost","root","","gudang_terpal");

$id = $_GET['id'];
$ids = $_SESSION['hapus'];
if ($id == $ids) {
	$hapus = mysqli_query($koneksi,"DELETE FROM admin WHERE id_admin = '$id'");
	if ($hapus) {
		echo "<script>
		alert('Berhasil di hapus');
		document.location.href = 'logout.php'
		</script>";
	}else{
		echo "<script>
		alert('gagal dihapus');
		document.location.href = 'admin.php'
		</script>";
	}
}else{
	echo "<script>
	alert('tidak punya akses');
	document.location.href = 'admin.php'
	</script>";
}







?>