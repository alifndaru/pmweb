<?php 
include "config.php";

  $title = $_POST['title'];
  $framework = $_POST['framework'];
  $foto = $_FILES['foto']['name'];
  $tmp = $_FILES['foto']['tmp_name'];

//rename
$fotobaru = date('dmYHis').$foto;
// Set path folder tempat menyimpan fotonya
$path = "images/".$fotobaru;
// Proses upload

if (move_uploaded_file($tmp, $path)) {
  $query = "INSERT INTO porto(title, framework, foto) VALUES('$title', '$framework', '$foto' )";
  $result = mysqli_query($koneksi, $query);
  if ($result) {
    header("location:allporto.php");
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='AddPortoController.php'>Kembali Ke Form</a>";
  }
}else{
  echo "Maaf, Gambar gagal untuk diupload.";
  echo "<br><a href='AddPortoController.php'>Kembali Ke Form</a>";
}



  // $query = "INSERT INTO porto VALUES('$title', '$framework', '$file' )";

  // $result = mysqli_query($koneksi, $query);
  // var_dump($query);
  // if ($result) {
  //   move_uploaded_file($_FILES['foto']['tmp_name'], "$file");
  // }

?>