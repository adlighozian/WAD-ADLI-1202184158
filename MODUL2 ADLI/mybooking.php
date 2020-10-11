<!DOCTYPE html>
<html>




<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>mybooking</title>
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
                            <li class="nav-item active">
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

    <?php

    $mt_rand = mt_rand(100000, 999999);

    $time = strtotime(str_replace("-", "/", $_POST["tanggal"]));

    $date_input = date('d-m-Y', $time);

    $check = date('d-m-Y', strtotime($_POST['tanggal'] . " +" . $_POST["durasi"] . " day"));

    //if (isset( $_POST['pilihan'];)) { $total += 20; }

    if ($_POST['pilihan'] == "VIP") {
        $total = 90 * (int)$_POST["durasi"];
    }
    if ($_POST['pilihan'] == "LUXURY") {
        $total = 150 * (int)$_POST["durasi"];
    }
    if ($_POST['pilihan'] == "MEVVAH") {
        $total = 200 * (int)$_POST["durasi"];
    }

    //$total = 200 * (int)$_POST["durasi"];

    if (isset($_POST["makan"])) {
        $total += 20;
    }

    if (isset($_POST["service"])) {
        $total += 20;
    }

    ?>





    <table class="table mt-5 mr-5 ml-3">
        <thead>
            <tr>
                <th scope="col">booking Number</th>
                <th scope="col">Name</th>
                <th scope="col">Check-in</th>
                <th scope="col">Check-out</th>
                <th scope="col">Room Type</th>
                <th scope="col">Phone Number</th>
                <th scope="col">service</th>
                <th scope="col">Total Price</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td> <?php echo $mt_rand; ?></td>
                <td><?php echo $_POST["nama"]; ?></td>
                <td><?php echo $date_input; ?> </td>
                <td><?php echo $check; ?></td>
                <td><?= $_POST['pilihan']; ?></td>
                <td><?php echo $_POST["hp"]; ?></td>
                <td>
                    <ul>
                        <li><?php if (isset($_POST["service"])) {
                                echo "Room sevice";
                            }  ?> </li>
                        <li><?php if (isset($_POST["makan"])) {
                                echo "BreakFast";
                            }  ?> </li>
                    </ul>
                </td>

                <td> $<?php echo $total; ?> </td>
            </tr>
        </tbody>
    </table>


</body>

</html>