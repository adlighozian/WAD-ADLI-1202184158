<!doctype html>
<html>

<?php

require 'koneksi.php';


if (!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}

$id = $_SESSION["nama"];
$apa1 = mysqli_query($conn, "SELECT * FROM cart WHERE user_id = '$id' ");



?>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <title>cart</title>



  <nav class="navbar navbar-light " style="background-color:#EFEDED;">
    <a class="navbar-brand" href="#" style="color: black;">WAD Beauty</a>

    <form class="form-inline">

      <a href="cart.php"> <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
        </svg></a>

      <a class="nav-link active text-dark">Selamat datang</a>
      <div class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php echo $_SESSION["nama"]; ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="index.php">Home</a>
          <a class="dropdown-item" href="profil.php">Profil</a>
          <a class="dropdown-item" href="logout.php">Logout</a>
        </div>
      </div>

    </form>
  </nav>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container" style="text-align: center;">
    <div class="row">
      <div class="col">
      </div>

      <!-- Pemisah -->

      <div class="col-10">

        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama barang</th>
              <th scope="col">Harga</th>
              <th scope="col">Edit</th>
            </tr>
          </thead>
          <tbody>





            <?php $i = 1;


            while ($apa = mysqli_fetch_assoc($apa1)) : ?>

              <tr>
                <td><?= $i; ?></td>
                <td><?= $apa["nama_barang"]; ?></td>
                <td>Rp.<?= $apa["harga"]; ?> JT</td>
                <td>
                  <a href="hapus.php?id=<?= $apa["id"]; ?>" type="submit" name="hapus" class="btn btn-danger btn-sm">delete</a>
                </td>
              </tr>



              <?php $i++; ?>

            <?php endwhile; ?>







          </tbody>
        </table>
      </div>
      <!-- pemisah -->

      <div class="col">
      </div>
    </div>
  </div>
  <?php





  ?>

</body>

</html>