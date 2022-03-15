<?php 
session_start();
if (!$_SESSION['berhasil']) {
  header("location: login.php");
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
            <a class="nav-link btn btn-danger font-weight-bold" href="logout.php" onclick="return confirm('apakah anda yakin?');">Logout</a>
          </div>
        </div>
      </div>
    </nav>

    <div class="container mt-4 rounded" style="background-color: #141F31;">
      <div class="row p-5 text-white">
        <div class="col-lg-6 px-4 my-auto mt-3">
          <h1 class="bold">Hai <?php echo $_SESSION['id'] ?></h1>
          <span>Selamat Datang Di Web Lancar Jaya Terpal</span>
        </div>
        <div class="col-lg-6 mx-auto rounded mt-4">
          <img class="mx-auto w-100" src="asset/img/terpal.jpeg" alt="">
        </div>
      </div>
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
              <a href="#" class="text-white m-2"><i class="fab fa-facebook-square"></i></a>
              <a href="https://shopee.co.id/ud.lancarjayaterpal" target="blank" class="text-white m-2"><i class="fas fa-shopping-bag"></i></a>
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