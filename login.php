<?php
session_start();
if (isset($_POST['submit'])) {

    $koneksi = mysqli_connect("localhost","root","","gudang_terpal");
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    $quary = mysqli_query($koneksi, "SELECT * FROM admin WHERE username = '$username' ");
    $data = mysqli_fetch_assoc($quary);

    if ($password === $data['password']) {
        $_SESSION["id"] = $data['nama_admin'];
        $_SESSION["berhasil"] = "true";
        $_SESSION['ids'] = $data['id_admin'];
        $_SESSION['hapus'] =$data['id_admin'];
        echo "<script>
        alert('Berhasil masuk');
        document.location.href = 'index.php'
        </script>";
    }else{
        echo "<script>
        alert('username dan password salah');
        document.location.href = 'login.php'
        </script>"; 
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


        <form method="POST" enctype="multipart/form-data">
            <div class="row w-75 mx-auto shadow-lg mt-5 rounded">

                <div class="col-lg-6 login-box p-5">
                    <div class="header mb-5">
                        <h2 class="mx-auto text-center">Lancar Jaya Terpal</h2>
                    </div>
                    <hr>
                    <div class="form-input">

                     <div class="input-group mb-3 mt-5">
                         <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroup-sizing-default"><i class="fas fa-user"></i></span>
                      </div>
                      <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" autocomplete="off" placeholder="Username" required="" name="username">
                  </div>

                  <div class="input-group mb-3 mt-4">
                     <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-default"><i class="fas fa-lock"></i></span>
                  </div>
                  <input type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Password" name="password">
              </div>

              <button class="btn px-4 mt-4 text-white" style="background-color: #141F31;" type="submit" name="submit">Login</button>
              <a class="nav-link btn btn-danger font-weight-bold" href="add-admin.php" style=" width: 90px; margin-top: 1px; ">Daftar</a>

          </div>
      </div>

      <div class="col-lg-6 p-4 text-white text-right" style="background-color: #141F31;">
        <div class="container mt-3 p-4">
            <h1>Marketing and Innovation</h1>
            <br>
            <span>#BestQualityWithALowPrice</span>
        </div>
        <div class="navbar-nav ml-auto" style=" width: 220px; ">
            <a class="nav-link btn btn-danger font-weight-bold" href="beli.php">beli</a>
        </div>
    </div>

</div>
</form>

<br><br><br>





<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>