<!Doctype html>
<html>

<?php

require 'koneksi.php';

if (isset($_POST["daftar"])) {

  if (registrasi($_POST) > 0) {

    echo "<script> alert ('Akun Berhasil Dibuat'); document.location.href = 'login.php'; </script>";
  } else {
    echo mysqli_error($conn);
  }

  $error = true;
}



?>


<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <title>Register</title>

  <style>
    #box {
      position: absolute;
      width: 400px;
      height: 650px;
      left: 450px;

      background: #FFFFFF;

      box-sizing: border-box;
      box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    }

    #warna {
      background-color: #CFF7FA;

    }

    #btn {
      margin: 40px;
    }
  </style>
</head>

<body id="warna">
  <nav class="navbar navbar-light " style="background-color:#EFEDED;">
    <a class="navbar-brand" href="#" style="color: black;">WAD</a>

    <form class="form-inline">
      <a class="nav-link active text-dark" href="Login.php">Login</a>
      <a class="nav-link active text-dark" href="Register.php">Register</a>

    </form>


  </nav>

  <?php if (isset($error)) : ?>

    <nav class="navbar navbar-light " style="background-color:#fffa99;">
      <p class="navbar-brand" href="#" style="color: #7d781b;">username sudah ada</p>

    </nav>

  <?php endif; ?>

  <br>
  <div id="warna">
    <div id="box">
      <br><br>
      <h3 style="text-align: center;">Register</h3>
      <div class="card-body">

        <form action="" method="post">
          <div class="form-group col-10">
            <label for="exampleInputEmail1">username</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Anda" name="nama" required>
          </div>
          <div class="form-group col-10">
            <label for="email1">Email</label>
            <input type="email" class="form-control" id="email1" placeholder="email" name="email" required>
          </div>
          <div class="form-group col-10">
            <label for="nohp">No Handphone</label>
            <input type="text" class="form-control" id="Nohp" placeholder="No Handphone" name="nohp" required>
          </div>
          <div class="form-group col-10">
            <label for="password">Kata Sandi</label>
            <input type="password" class="form-control" id="password" placeholder="Password" name="password" id="password" required>
          </div>
          <div class="form-group col-10">
            <label for="password">Konfirmasi Kata Sandi</label>
            <input type="password" class="form-control" id="password" placeholder="Password" name="password2" id="password2" required>
          </div>
          <button type="submit" class='btn btn-primary' id="daftar" name="daftar">Daftar</button>

        </form>
        <br>
        <p>Sudah punya akun? <a href="Login.php"> Login </a></p>



      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>