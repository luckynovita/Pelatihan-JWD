<?php

require 'functions.php';
if (isset($_POST['login'])) {
  login($_POST);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <section class="vh-100">
        <div class="container py-5 h-100">
          <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-7 col-xl-6">
              <img src="assets/img/login.png"
                class="img-fluid" alt="">
            </div>
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
              <form action="" method="POST">
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="text" id="form1Example13" class="form-control form-control-lg" name="username" />
                  <label class="form-label" for="form1Example13">Username</label>
                </div>
      
                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" id="form1Example23" class="form-control form-control-lg" name="password" />
                  <label class="form-label" for="form1Example23">Password</label>
                </div>
                
                <div class="d-flex justify-content-around align-items-center mb-4">
                  <!-- Checkbox -->
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                    <label class="form-check-label" for="form1Example3"> Remember me </label>
                  </div>
                  <a href="#!">Forgot password?</a>
                </div>

                <div class="alert alert-danger mt-3" id="gagal" role="alert">
                  Username atau Password Salah !
                </div>
      
                <!-- Submit button -->
                <div>
                    <button type="submit" class="btn btn-primary btn-sm btn-block" name="login">Sign in</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>

      <footer class="text-white text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2023 Copyright:
          <a class="text-white" href="/index.html">Rumah Peduli Kasih</a>
        </div>
        <!-- Copyright -->
      </footer>

  <script>
    let alertG = document.getElementById("gagal");
    alertG.style.display = 'none';
  </script>
</body>
</html>