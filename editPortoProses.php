<?php 
include "config.php";
  $id = $_GET['porto_id'];

  $title_save = $_POST['title'];
  $framework_save = $_POST['framework'];
  $foto_lama = $_POST['fotolama'];
  $img_tmp = $_FILES['foto']['tmp_name'];
  $img_save = $_FILES['foto']['name'];
  // var_dump($img_save);
  // $image_save=$image; //Added if image is not chose from the form post

  if ($img_save) {
    unlink('images/'.$img_tmp);
  }

  move_uploaded_file($img_tmp, 'images/'.$img_save);
  $query = "UPDATE porto SET title='$title_save', framework='$framework_save', foto='$foto' WHERE porto_id = '$id' ";


// // if (isset($_FILES['image']['tmp_name'])) {
//   $file=$_FILES['foto']['tmp_name'];
//   $image= addslashes(file_get_contents($_FILES['foto']['tmp_name']));
//   $image_name= addslashes($_FILES['foto']['name']);
//   move_uploaded_file($_FILES["foto"]["tmp_name"],"images/" . $_FILES["foto"]["name"]);
//   $image_save ="images/" . $_FILES["image"]["name"];
//   mysqli_query($koneksi,"UPDATE porto SET title ='$title', subjek  ='$subjek',foto ='$foto' WHERE porto_id = '$id'");
//   // header("Location: index.php");
//   header("Location: index.php");
?>

