<?php

require 'functions.php';
if (isset($_POST['submit'])) {
  if (save($_POST) > 0) {
    echo "<script>alert('Data Berhasil Disimpan !')</script>";
  } else {
    echo "<script>alert('Data Gagal Disimpan !')</script>";
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
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
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
                <a class="nav-link active" aria-current="page" href="#">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#section_2">Tentang Kami</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Penerimaan
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#section_2">Donasi</a></li>
                  <li><a class="dropdown-item" href="form-relawan.php">Relawan</a></li>
                </ul>
              </li>
            </ul>
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a href="login.php" class="btn btn-light"><i class="bi bi-box-arrow-in-right"> Masuk</i></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <!-- content -->

    <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
    <!-- <div class="d-flex flex-column mb-3">
        <div class="p-4">
            <div class="card" style="width: 18rem;">
            <img src="assets/img/unicef.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
    </div> -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 mb-5 pb-5 pb-lg-0 mb-lg-0">

                    <h2>Kenapa Harus Zakat Di Rumah Yatim ?</h2>
                    <p>Rasulullah SAW bersabda: “Orang-orang yang memelihara anak yatim di antara umat muslimin, memberikan mereka makan dan minum, pasti Allah memasukkannya ke dalam surga, kecuali ia melakukan dosa yang tidak bisa diampuni.” (HR Tirmidzi dari Ibnu Abbas).</p>

                    <a href="#section_2" class="donasi-btn smoothscroll me-3">Donasi Yuk!</a>
                </div>
                <div class="hero-image-wrap col-lg-6 col-12 mt-3 mt-lg-0">
                    <img src="assets/img/hero-section.png" class="hero-image img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="section_2" class="d-flex justify-content-center align-items-center">
      <div class="container text-center">
        <div class="row">
          <h2>Manfaat Sedekah Kepada Anak Yatim</h2>
          <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="assets/img/unicef.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Membuka Pintu Rezeki</h5>
                  <p class="card-text">Apabila seorang hamba Allah bersedekah dengan hati yang tulus dan bersih, maka Allah akan menggantinya dengan rezeki yang berkali-kali lipat.</p>
                </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="assets/img/unicef.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Mendapatkan Pertolongan Dari Allah SWT</h5>
                  <p class="card-text">Seorang hamba yang penyayang dan membantu anak-anak yatim akan dipermudah segala urusannya oleh Allah SWT. Tidak hanya kesulitan di dunia,namun juga kemudahan dalam urusan akhirat kelak.</p>
                </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="assets/img/unicef.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Menjadi Teman Rasulullah</h5>
                  <p class="card-text">Salah satu cara untuk menjadi teman Rasulullah di akhirat kelak adalah dengan cara menyantuni dan mengasuh anak-anak yatim piatu. Hal tersebut ditegaskan oleh Rasulullah yang dirangkum di dalam hadist sahih HR. Bukhari, Abu Daud, Tirmidzi, dan Ahmad dari Sahl bin Sa’d.</p>
                </div>
            </div>
          </div>
          <h2>Bismillah..</h2>
          <h5>Sedekah Sahabat bantu permudah hidup Anak Yatim dan Dhuafa.</h5>
          <p>
            <!-- Button trigger modal -->
          <button type="button" class="btn-donasi justify-content-lg-center" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Formulir Donasi
        </button>
          </p>
          
        </div>
      </div>

      <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Donasi Rumah Peduli Kasih</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-donasi">
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama</label>
                            <input type="name" name="name" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Alamat E-mail</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                        <div id="emailHelp" class="form-text">Kita tidak akan pernah berbagi email Anda dengan orang lain.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">No Telepon</label>
                            <input type="text" name="nohp" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Metode Pembayaran</label>
                          <input type="varchar" name="metode" class="form-control" id="exampleInputEmail1">
                      </div>
                        <!-- <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                        </div> -->
                        <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Saya setuju menerima segala bentuk komunikasi dari Panti Asuhan.</label>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary" name="submit">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
        </div>
    </div>
      

    </section>

    
    <!-- footer -->

    <footer class="text-white text-center text-lg-start">
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
      </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>