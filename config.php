<?php 

$koneksi = mysqli_connect("mysql", "root", "root", "native");
if (mysqli_connect_errno()) {
  echo "koneksi gagal". mysqli_connect_error();
}


?>
