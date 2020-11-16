<?php

$conn = mysqli_connect("localhost", "", "root", "praktikum");

if ($_POST["submit"]) {


    $nama = $_POST["nama"];
    $deskripsi = $_POST["deskripsi"];
    $kategori = $_POST["kategori"];
    $gambar = $_POST["gambar"];
    $tanggal = $_POST["tanggal"];
    $mulai = $_POST["mulai"];
    $berakhir = $_POST["berakhir"];
    $tempat = $_POST["tempat"];
    $harga = $_POST["harga"];

    $query = "INSERT INTO modul3 VALUES ('','$nama','$deskripsi','$gambar',' $kategori','$tanggal','$mulai','$berakhir','$tempat','$harga','')";
    mysqli_connect($conn, $query);
}





?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Buat Event</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <link href="style.css" rel="stylesheet" type="text/css" />


    <nav class=" navbar-expand-lg navbar-light " style="background-color:#3461eb">

        <div class="container">


            <div class="row">
                <div class="col-sm-5">

                    <a class="nav-link" style="margin-bottom: 5px; margin-top: 5px; font-weight: bold; font-size: 19px; color: white; font-family: Times New Roman;">EAD EVENTS</a>

                </div>

                <div class="col-sm-5">
                </div>

                <div class="col-sm">

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="Home.php" style="color: white; font-family: Times New Roman; margin-bottom: 5px; margin-top: 5px;">Home</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="#" style="color: white; font-family: Times New Roman; border: 1px solid white; border-radius: 5px;
                                margin-bottom: 5px; margin-top: 5px;">Buat Event</a>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </nav>

</head>

<body>

    <style>
        .namafont {
            font-family: 'Times New Roman', Times, serif;
            font-weight: bold;
            border: 2px solid grey;
            border-radius: 8px;
            height: 500px;
            padding-left: 20px;
            padding-right: 20px;
            padding-top: 20px;

        }

        .border1 {
            border-top: 30px solid red;
        }

        .border2 {
            border-top: 30px solid blue;
        }
    </style>
    <div class="container mt-3 ">
        <div class="row-1">
            <h4 style="font-family: 'Times New Roman', Times, serif; font-weight: bold; color : #4bc99f">Buat Event</h4>
        </div>
    </div>

    <form action="" method="post">
        <div class="container ">
            <div class="row">
                <div class="col-sm ">
                    <div class="namafont border1">



                        <div class="form-group">
                            <label for="name">Nama :</label>
                            <input type="text" class="form-control" name="nama" required>

                        </div>
                        <div class="form-group">
                            <label for="desc">Deskripsi :</label>
                            <textarea class="form-control" id="desc" rows="3" name="deskripsi" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="desc">Upload Gambar :</label>
                            <input type="file" class="form-control-file border" name="gambar" required>
                        </div>
                        <label for="kat">Kategori :</label>
                        <br>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="kategori" id="kategori" value="offline">offline
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="kategori" id="kategori" value="online">online
                            </label>
                        </div>




                    </div>
                </div>

                <div class="col-sm">

                    <div class="namafont border2">

                        <div class="form-group">
                            <label for="hari">Tanggal :</label>
                            <input type="date" class="form-control" id="hari" name="tanggal" required>

                        </div>
                        <div class="row">
                            <div class="col">

                                <label for="sel1">Jam mulai :</label>
                                <select class="form-control" id="jamm" name="mulai" required>
                                    <option>05.00</option>
                                    <option>06.00</option>
                                    <option>07.00</option>
                                    <option>08.00</option>
                                    <option>09.00</option>
                                    <option>10.00</option>
                                    <option>11.00</option>
                                    <option>12.00</option>
                                    <option>13.00</option>
                                    <option>14.00</option>
                                    <option>15.00</option>
                                    <option>16.00</option>
                                    <option>17.00</option>
                                    <option>18.00</option>
                                    <option>19.00</option>
                                    <option>20.00</option>
                                    <option>21.00</option>
                                    <option>22.00</option>
                                </select>
                            </div>

                            <div class="col">

                                <label for="sel1">Jam selesai :</label>
                                <select class="form-control" id="jams" name="berakhir" required>
                                    <option>05.00</option>
                                    <option>06.00</option>
                                    <option>07.00</option>
                                    <option>08.00</option>
                                    <option>09.00</option>
                                    <option>10.00</option>
                                    <option>11.00</option>
                                    <option>12.00</option>
                                    <option>13.00</option>
                                    <option>14.00</option>
                                    <option>15.00</option>
                                    <option>16.00</option>
                                    <option>17.00</option>
                                    <option>18.00</option>
                                    <option>19.00</option>
                                    <option>20.00</option>
                                    <option>21.00</option>
                                    <option>22.00</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tempat">Tempat :</label>
                            <input type="text" class="form-control" id="tempat" name="tempat" required>
                        </div>
                        <div class="form-group">
                            <label for="harga">harga :</label>
                            <input type="text" class="form-control" id="harga" name="harga" required>
                        </div>

                        <label for="ben">Benefit :</label><br>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" value="snack" name="benefit[]" id="benefit[]">Snack
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" value="sertifikat" name="benefit[]" id="benefit[]">Sertifikat
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" value="souvenir" name="benefit[]" id="benefit[]">Souvenir
                            </label>
                        </div>

                        <div class="row">

                            <div class="col">
                            </div>

                            <div class="col">
                            </div>

                            <div class="col">

                                <button type="submit" name="submit" class="btn btn-primary btn-sm">Submit</button>
                                <button type="reset" class="btn btn-danger btn-sm">Cancel</button>

                                <!-- <input type="submit" value="submit" name="submit" class="btn btn-primary btn-sm" />
                                <input type="reset" value="cancel" class="btn btn-danger btn-sm" /> -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </form>
</body>

</html>