<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>booking</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <link href="style.css" rel="stylesheet" type="text/css" />


    <nav class=" navbar-expand-lg navbar-light " style="background-color:#3461eb">

        <div class="container">


            <div class="row">
                <div class="col-sm-5">

                    <a class="nav-link" href="home.html"> <button style="background : #fff; border-radius : 10px; border : 1px solid #009291">back</button> </a>

                </div>
                <div class="col-sm">

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link">Home</a>
                            </li>
                            <li class="nav-item active">
                                <a class="test nav-link">booking</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">My Booking</a>
                            </li>
                        </ul>
                    </div>

                </div>

                <div class="col-sm">
                </div>

            </div>
        </div>
    </nav>

</head>

<body>



    <div class="container mt-5 ">
        <div class="row">
            <div class="col-sm bg-white">

                <form action="mybooking.php" method="post">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Name</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="nama">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Check-in</label>
                        <input type="date" class="form-control" id="exampleInputPassword1" name="tanggal">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Duration</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="durasi">
                    </div>

                    <div>
                        <p>Room Type</p>
                        <select class="custom-select" name="pilihan">
                            <option value="VIP" <?php if ($_GET['judul'] === "VIP") { echo "selected"; } ?>>VIP</option>
                            <option value="LUXURY" <?php if ($_GET['judul'] === "LUXURY") { echo "selected"; } ?>>LUXURY</option>
                            <option value="MEVVAH" <?php if ($_GET['judul'] === "MEVVAH") { echo "selected"; } ?>>MEVVAH</option>
                        </select>
                    </div>
                    <br>
                    <p>Add Service</p>
                    <p id="ukuran">$ 20/Service</p>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1"name="service" value="20">
                        <label class="form-check-label" for="exampleCheck1" value ="Room Servide">Room Service</label>
                        <br>
                        <input type="checkbox" class="form-check-input" id="exampleCheck1"name="makan" value="20">
                        <label class="form-check-label" for="exampleCheck1">Breakfast</label>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Phone Number</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="hp">
                    </div>

                    <div class="form-group row">
                        <div class="col">
                            <a class="nav-link" href="mybooking.php"> <input type="submit" class="btn btn-primary btn-lg btn-block" value = "booking"> </a>
                        </div>
                    </div>


                </form>
            </div>

            <!-- gambar -->

            <div class=" col-sm pt-5 pb-5 ">

                <style>
                    .embed-container {
                        position: relative;
                        padding-bottom: 56.25%;
                        height: 0;
                        overflow: hidden;
                        max-width: 100%;
                    }

                    .embed-container iframe,
                    .embed-container object,
                    .embed-container embed {
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                    }
                </style>

                <div class='embed-container'>

                    <?php if ($_GET["judul"] == "VIP") : ?>
                        <img id="coba" src="1.jpg" width="500" height="400" />

                    <?php elseif ($_GET["judul"] == "LUXURY") : ?>
                        <img id="coba" src="2.jpg" width="500" height="400" />

                    <?php elseif ($_GET["judul"] == "MEVVAH") : ?>
                        <img id="coba" src="3.jpg" width="500" height="400" />

                    <?php endif; ?>


                </div>
            </div>
        </div>

    </div>
    </div>


</body>





</html>