<!doctype html>
<html>

<?php

require 'koneksi.php';



if (!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}

$ambil = mysqli_fetch_assoc($ambilid);

?>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <title>home</title>
  <style>
    #box1 {
      position: absolute;
      width: 300px;
      height: 650px;
      left: 115px;
      background: #FFFFFF;
      box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    }

    #box2 {
      position: absolute;
      width: 300px;
      height: 650px;
      left: 36px;

      background: #FFFFFF;
      box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    }

    #box3 {
      position: absolute;
      width: 300px;
      height: 650px;
      left: -43px;

      background: #FFFFFF;
      box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    }

    #gmbr {
      position: absolute;
      width: 300px;
      height: 272px;

      background: url(esd.jpg);
    }

    #warna {
      background: blue;
    }
  </style>



  <nav class="navbar navbar-light " style="background-color:#EFEDED;">
    <a class="navbar-brand" href="#" style="color: black;">WAD Beauty</a>

    <form class="form-inline">

      <a href="cart.php?id=<?= $ambil["id"]; ?>"> <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
        </svg></a>

      <a class="nav-link active text-dark">Selamat datang</a>
      <div class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php echo $_SESSION["nama"]; ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="index.php" style="color: blue;">Home</a>
          <a class="dropdown-item" href="profil.php">Profil</a>
          <a class="dropdown-item" href="logout.php">Logout</a>
        </div>
      </div>

    </form>

  </nav>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</head>






<div class="container" style="text-align: center;">

  <div class="starter-template">
    <h1>Selamat Datang, <?php echo $_SESSION['nama']; ?></h1>
    <p class="lead">Di WAD Magic Beauty</p>
    <p class="lead">bersama kami membangun kulit</p>
  </div>

</div>

<div class="row">
  <div class="col-sm-1"></div>

  <form action="" method="post">
    <div class="col-sm-3">
      <div class="card" style="width:400px">
        <img class="card-img-top" src="1.jpg" alt="Card image" style="width:100%">
        <div class="card-body">
          <h4 class="card-title">Magic Skin Care 1</h4>
          <p class="card-text " name="low" value="low">Magic Skin Care memiliki sifat magis yang bisa membuat wajah anda berubah menjadi ganteng dan cantik dengan sekejap</p>
          <h6>Rp. 100.000.000</h6>
          <button type="submit" name="submiti" class="btn btn-primary">tambahkan ke keranjang</a>

        </div>
      </div>
    </div>
  </form>

  <form action="" method="post">
    <div class="col-sm-3">
      <div class="card" style="width:400px">
        <img class="card-img-top" src="2.jpg" alt="Card image" style="width:100%">
        <div class="card-body">
          <br>
          <h4 class="card-title">Magic Skin Care 2</h4>
          <p name="mid" value="mid" class="card-text">Magic Skin Care tier 2 ini memiliki bahan baku yang sulit dicari, karena skin care ini dibuat langsung oleh penyihir terbaik Invoker</p>
          <h6>Rp. 200.000.000</h6>
          <button type="submit" name="submita" class="btn btn-primary">tambahkan ke keranjang</a>
        </div>
      </div>
    </div>
  </form>

  <form action="" method="post">
    <div class="col-sm-3">
      <div class="card" style="width:400px">
        <img class="card-img-top" src="3.jpg" alt="Card image" style="width:100%">
        <div class="card-body">
          <br>
          <h4 class="card-title">Magic Skin Care 3</h4>
          <p class="card-text" name="hi" value="hi">Magic Skin Care tier 3 ini adalah produk terbaru dari kami, yang bisa membuat anda menjadi good looking 7 turunan</p><br>
          <h6>Rp. 300.000.000</h6>
          <button type="submit" name="submitu" class="btn btn-primary">tambahkan ke keranjang</a>
        </div>
      </div>
    </div>
  </form>

</div>
</body>

</html>