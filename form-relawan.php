<?php
require 'functions.php';
if (isset($_POST['kirim'])) {
  if (saveRelawan($_POST) > 0) {
    echo "<script>alert('Data Berhasil Ditambahkan !')</script>";
  } else {
    echo "<script>alert('Data Gagal Ditambahkan !')</script>";
  }
  
}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Panti Asuhan</title>
    <!-- my style -->
    <link rel="stylesheet" href="assets/css/index.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;1,700&display=swap" rel="stylesheet" />


  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="assets/img/logo.jpg" alt="" width="50" height="50"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php">Tentang Kami</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="/" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Penerimaan
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="index.php">Donasi</a></li>
                  <li><a class="dropdown-item" href="form-relawan.php">Relawan</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <!-- content -->

   <section id="section_3">
    <div class="container">
      <div class="form-relawan">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="nama_lengkap">
              </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
              <div id="emailHelp" class="form-text">Kita tidak akan pernah berbagi email Anda dengan orang lain.</div>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">No Telepon</label>
              <input type="text" name="notlp" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Pekerjaan</label>
              <input type="text" name="pekerjaan" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Alamat</label>
              <input type="text" name="alamat" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Agama</label>
              <input type="text" name="agama" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Pengalaman Di Bidang Sosial</label>
              <input type="text" name="pengalaman" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="mb-3">
              <label for="formFile" class="form-label">Copy KTP</label>
              <input class="form-control" type="file" id="formFile" name="ktp">
            </div>
            <div class="mb-3">
              <label for="formFile" class="form-label">Pas Foto</label>
              <input class="form-control" type="file" id="formFile" name="foto">
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <p class="form-check-label" for="exampleCheck1">Saya setuju menerima segala bentuk komunikasi dari Panti Asuhan.</p>
            </div>
            <button type="submit" class="btn btn-primary" name="kirim">Kirim</button>
          </form>
      </div>
    </div>
   </section>

   <footer class="text-white text-center text-lg-start">
     <!-- footer -->
      <!-- Grid container -->
      <div class="container p-4">
        <!--Grid row-->
        <div class="row">
          <!--Grid column-->
          <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
            <h5 class="text-uppercase">Rumah Peduli Kasih</h5>
            <p>
             Rumah Peduli Kasih sebagai organisasi amal yang dikenal secara luas. Berupaya menyediakan tempat tinggal, pendidikan, perawatan kesehatan, dan dukungan emosional bagi anak-anak yang kehilangan orang tua mereka. Tujuan utama kami adalah memastikan kesejahteraan dan perkembangan anak-anak yang kurang beruntung tersebut.
            </p>
          </div>
          <!--Grid column-->
    
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Alamat Organisasi</h5>
            <ul class="list-unstyled mb-0">
              <li>
                Rumah Peduli Kasih, Jl. Ngablak Indah II No.20 A, Bangetayu Kulon, Kec. Genuk, Kota Semarang, Jawa Tengah 50111
              </li>
              <br>
              <li>
                 <i class="bi bi-telephone"> Call Center : 081111111111</i>
              </li>
            </ul>
          </div>
          <!--Grid column-->
    
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
              <div class="card" style="width: 15rem;">
                <div class="card-body">
                  <h4 class="card-title">Informasi</h4>
                  <p>Dana yang didonasikan melalui Rumah Peduli Kasih bukan bersumber dan bukan untuk tujuan pencucian uang, maupun tindakan kejahatan lainnya.</p>
                </div>
            </div>
            
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </div>
      <!-- Grid container -->
    
     <!-- Copyright -->
     <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2023 Copyright:
        <a class="text-white" href="/index.html">Rumah Peduli Kasih</a>
      </div>
      <!-- Copyright -->
   </>
       
      

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>