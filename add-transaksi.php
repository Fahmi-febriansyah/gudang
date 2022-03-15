<?php 
session_start();
if (!$_SESSION['berhasil']) {
  header("location: login.php");
}
$koneksi = mysqli_connect("localhost","root","","gudang_terpal");
$id = $_SESSION['id'];


if (isset($_POST['submit'])) {

  $tipe = $_POST['tipe'];
  $ukuran = $_POST['ukuran'];
  $harga = $_POST['harga'];
  $jumlah = $_POST['jumlah'];
  $duit = $harga;
  $tanggal = $_POST['tanggal'];
  $pembeli = $_POST['pembeli'];
  $keterangan = $_POST['keterangan'];
  $paid = $_POST['paid'];
  $admin = $id;
  $puari = mysqli_query($koneksi,"SELECT * FROM barang WHERE ukuran = '$ukuran' AND tipe = '$tipe'");
  $kur = mysqli_fetch_assoc($puari);
  $nilai = $kur['stok'] - $jumlah;
  if ($kur['stok'] == 0) {
    echo "<script>
    alert('stok barang habis');
    document.location.href = 'transaksi.php'
    </script>";
  }else{
    $up = mysqli_query($koneksi,"UPDATE barang SET stok = '$nilai' WHERE ukuran = '$ukuran' AND tipe = '$tipe'");

    $kuari = mysqli_query($koneksi,"INSERT INTO transaksi VALUES('','$tipe','$ukuran','$duit','$jumlah','$tanggal','$keterangan','$pembeli','$id','$paid')");
    if ($kuari) {
      echo "<script>
      alert('Transaksi Berhasil');
      document.location.href = 'transaksi.php'
      </script>";
    }else{
     echo "<script>
     alert('Transaksi Gagal');
     document.location.href = 'transaksi.php'
     </script>";
   }
 }
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
  </head>
  <body>


    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #141F31;">
      <div class="container py-2">
        <a class="navbar-brand font-weight-bold" href="#">UD. Lancar Jaya Terpal</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav mx-auto">
            <a class="nav-link active" href="index.php">Beranda</a>
            <a class="nav-link active" href="admin.php">Admin</a>
            <a class="nav-link active" href="barang.php">Barang</a>
            <a class="nav-link active" href="transaksi.php">Transaksi</a>
          </div>
          <div class="navbar-nav ml-auto">
            <a class="nav-link btn btn-danger font-weight-bold" href="logout.php">Logout</a>
          </div>
        </div>
      </div>
    </nav>

    <div class="container mt-5">

      <div class="header p-3 text-white m-2" style="background-color: #141F31;">INPUT DATA TRANSAKSI</div>
      <form method="POST" class="p-3 shadow m-2">
        <div class="form-group my-3">
          <label for="basic-url">ukuran</label>
          <input type="text" name="ukuran" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="Masukkan Harga barang">
        </div>
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
          <label for="basic-url">Harga</label>
          <input type="number" name="harga" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="Masukkan Harga barang">
        </div>
        <div class="form-group my-3">
          <label for="basic-url">Jumlah</label>
          <input type="text" name="jumlah" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="masukan jumlah barang">
        </div>
        <div class="form-group my-3">
          <label for="basic-url">Tanggal</label>
          <input type="date" name="tanggal" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="Masukkan tanggal Barang">
        </div>
        <div class="form-group my-3">
          <label for="basic-url">Keterangan</label>
          <input type="text" name="keterangan" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="Masukkan Keterangan Barang">
        </div>
        <div class="form-group my-3">
          <label for="basic-url">Nama Pembeli</label>
          <input type="text" name="pembeli" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="Masukkan Nama Pembeli">
        </div>
        <div class="form-group my-3">
          <label for="basic-url">Status</label>
          <select class="form-control" id="paid" name="paid">
            <option value="1" >Terbayar</option>
            <option value="0" >Belum Terbayar</option>
          </select>
        </div>
        <div class="form-group my-3">
          <label for="basic-url">admin</label>
          <input type="text" name="admin" value="<?php echo $id ?>" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="Masukkan Keterangan Barang">
        </div>


        <button class="btn px-4 mt-4 text-white" style="background-color: #141F31;" name="submit" id="submit">Tambah</button>

      </form>

    </div>
    

    <div class="footer mt-5 p-5 text-white text-center" style="background-color: #141F31;">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mx-auto mx-3">
            <h2>Location</h2>
            <p class="mt-2">Jl. Alternatif Cibubur No.110, Nagrak <br> Kec. Gn. Putri, Bogor, 
            Jawa Barat 16967</p>
          </div><div class="col-lg-6 mx-auto">
            <h2>Social Media</h2>
            <div class="socmed" style="font-size: 40px;">
              <a href="" class="text-white m-2"><i class="fab fa-facebook-square"></i></a>
              <a href="" class="text-white m-2"><i class="fas fa-shopping-bag"></i></a>
              <a href="" class="text-white m-2"><i class="fab fa-whatsapp-square"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>





    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
  </html>

