<?php

require 'koneksi.php';

$id = $_GET["id"];

if (hapus($id)>0){

    echo " 
<script> alert ('Berhasil Menghapus');
document.location.href = 'cart.php';
</script>";

}else{ echo " 
    <script> alert ('error bro');
    document.location.href = 'cart.php';
    </script>";
}



?>