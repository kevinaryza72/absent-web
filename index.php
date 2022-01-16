  <?php
session_start();
include ("koneksi.php");

 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Aplikasi Pengolahan Data Pegawai & Absensi</title>
  </head>
  <body>
<!-- Image and text -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="img/bapenda.png" width="40" height="40" class="d-inline-block align-top" alt="">
    <span class="navbar-brand mb-0 h1">BAPPENDA KABUPATEN BOGOR</span>
  </a>
</nav>
<div class="p-3 mb-2 bg-info">
  <main class="side-main">
    <!--================ Hero sm Banner start =================--> 
      <div class="container">
        <div class="row">
          <div class="col-lg-7 pt-4">
            <div>
              <img class="img-fluid" src="img/karyawan.png">
            </div>
          </div>
          <div class="col-lg-5 pt-5">
            <div class="hero-banner__content">
              <h1>Selamat Datang</h1>
              <p>Di Website Pengolahan Data Pegawai & Absensi</p>
              <br>
        <ul class="list-inline" id="chart-skill">
          <li> Login Sebagai :<br> <a href="login.php" target="_blank"><button class="btn btn-warning" style="size: 50px;">Admin</button></a>
          </li><br>
          <li> Login Sebagai :<br> <a href="karyawan/login_karyawan.php" target="_blank"><button class="btn btn-warning" style="size: 50px;">Pegawai</button></a>
          </li>
          
        </ul>
            </div>
          </div>
        </div>
      </div>
      <!--================ Hero sm Banner end =================-->
<div class="card">
  <div class="card-header">
    Alamat
  </div>
  <div class="card-body">
    <h5 class="card-title">Badan Pengelolaan Pendapatan Daerah (Bappenda) Kabupaten Bogor</h5>
    <p class="card-text">Jl. Tegar Beriman No.1, Pakansari, Cibinong, Bogor, Jawa Barat 16914</p>
    <a href="kontak.php" class="btn btn-primary">Kontak Kami</a>
  </div>
</div>
</div>
<!-- Footer -->
<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright -
    <a>Badan Pengelolaan Pendapatan Daerah</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>