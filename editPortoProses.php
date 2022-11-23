<?php 
include "config.php";
// $id = $_GET['porto_id'];

// $result = mysqli_query($koneksi,"SELECT * FROM porto WHERE porto_id  = '$id'");
// $test = mysqli_fetch_array($result);

// $title = $title['title'];
// $framework = $framework['framework'];
// $foto = $foto['foto'];

if(isset($_POST['submit'])){    
  $title_save = $_POST['title'];
  $framework_save = $_POST['framework'];
  $image_save=$image; //Added if image is not chose from the form post

// if (isset($_FILES['image']['tmp_name'])) {
  $file=$_FILES['foto']['tmp_name'];
  $image= addslashes(file_get_contents($_FILES['foto']['tmp_name']));
  $image_name= addslashes($_FILES['foto']['name']);
  move_uploaded_file($_FILES["foto"]["tmp_name"],"images/" . $_FILES["foto"]["name"]);
  $image_save ="images/" . $_FILES["image"]["name"];
  mysqli_query($koneksi,"UPDATE porto SET title ='$title', subjek  ='$subjek',foto ='$foto' WHERE porto_id = '$id'");
  // header("Location: index.php");
  header("Location: index.php");
}
?>
