<?php

$conn = mysqli_connect("localhost", "root", "", "wad_modul4");

session_start();



//register

function registrasi($data)
{
    global $conn;

    $nama = strtolower(stripslashes($data["nama"]));
    $email = ($data["email"]);
    $no_hp = ($data["nohp"]);
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    $result = mysqli_query($conn, "SELECT nama FROM user WHERE nama = '$nama'");

    if (mysqli_fetch_assoc($result)) {

        return false;
    }

    if ($password !== $password2) {
        echo "<script> alert ('konfirmasi password tidak sesuai !'); </script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($conn, "INSERT INTO user VALUES ('','$nama','$email','$no_hp','$password')");

    return mysqli_affected_rows($conn);
}

//menampilkan tabel

$keluarga1 = mysqli_query($conn, "SELECT * FROM cart");

$ambilid = mysqli_query($conn, "SELECT * FROM user");

// fuction tambah 1

if (isset($_POST["submiti"])) {

    if (tambah1($_POST) > 0) {

        echo " 
<script> alert ('Bangun Rumah Berhasil ditambahkan');

</script>";
    } else {
        echo " 
    <script> alert ('error bro');
    
    </script>";
    }
}

function tambah1($data)
{
    global $conn;

    $user_id = $_SESSION["nama"];
    $nama_barang = "Magic Skin Care 1";
    $harga = 100;

    $query = "INSERT INTO cart VALUES ('','$user_id','$nama_barang','$harga')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// fuction tambah 2

if (isset($_POST["submita"])) {

    if (tambah2($_POST) > 0) {

        echo " 
<script> alert ('Bangun Istana Berhasil ditambahkan');

</script>";
    } else {
        echo " 
    <script> alert ('error bro');
    
    </script>";
    }
}

function tambah2($data)
{
    global $conn;

    $user_id = $_SESSION["nama"];
    $nama_barang = "Magic Skin Care 2";
    $harga = 200;

    $query = "INSERT INTO cart VALUES ('','$user_id','$nama_barang','$harga')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// fuction tambah 3

if (isset($_POST["submitu"])) {

    if (tambah3($_POST) > 0) {

        echo " 
<script> alert ('Bangun Apartemen Berhasil ditambahkan');

</script>";
    } else {
        echo " 
    <script> alert ('error bro');
    
    </script>";
    }
}

function tambah3($data)
{
    global $conn;

    $user_id = $_SESSION["nama"];
    $nama_barang = "Magic Skin Care 3";
    $harga = 300;

    $query = "INSERT INTO cart VALUES ('','$user_id','$nama_barang','$harga')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

//fuction hapus

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM cart WHERE id = $id");

    return mysqli_affected_rows($conn);
}

// function ubah

function ubah($data)
{
    global $conn;
    $id = $data["id"];
    $nama = $data["nama"];
    $id_status = $data["status"];

    $query = "UPDATE keluarga SET
        nama = '$nama',
        id_status = '$id_status'

        WHERE id = $id
        ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

//submit ubah

if (isset($_POST["submit"])) {

    if (ubah($_POST) > 0) {

        echo " 
        <script> alert ('Berhasil diubah');
        document.location.href = 'index.php';
        </script>";
    } else {
        echo " 
        <script> alert ('e bro');
        document.location.href = 'index.php';
        </script>";
    }
}
