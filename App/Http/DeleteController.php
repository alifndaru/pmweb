<?php 
include "App/lib/config.php";
$id = $_GET['contact_id'];
$result = mysqli_query($koneksi,"DELETE FROM contact WHERE contact_id=$id");
// $query = "DELETE FROM contact WHERE contact_id='$id'";
// mysqli_query($koneksi, $query);
header("location:/resource/view/admin/index.php");
?>