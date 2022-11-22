<?php 


include "App/lib/config.php";

  $email = $_POST['email'];
  $subjek = $_POST['subjek'];
  $isi = $_POST['isi']; 

  // var_dump($contact_id);

// $result = mysqli_query($koneksi, "INSERT INTO contact VALUES('$contact_id','$email', '$subjek', '$isi')");
 $query = "INSERT INTO contact(email, subjek, isi) VALUES ( '$email', '$subjek', '$isi')";
 $result = mysqli_query($koneksi, $query);
 if ($result) {
  echo '<script>alert("berhasil mengirim"); document.location="/index.php";</script>';
  // header("location:index.php");
 }else {
  echo '<script>alert("gagal mengirim"); document.location="index.php";</script>'; 
 }



?>