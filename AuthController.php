<?php 
session_start();
include "config.php";


$email = $_POST['email'];
$password = $_POST['password'];

$query = mysqli_query($koneksi, "SELECT * FROM users WHERE email='$email' AND password='$password'");
$cek = mysqli_num_rows($query);
 
if($cek > 0){
	$_SESSION['email'] = $email;
	$_SESSION['status'] = "login";
	// header("location:/resource/view/admin/index.php");
  echo '<script>alert("anda berhasil login"); document.location="/Admin.php";</script>';
}else{
  echo '<script>alert("gagal login"); document.location="/Auth.php"</script>';
	// header("location:index.php?pesan=gagal");
}
// if (mysqli_num_rows($query)>0) {
//   $item = mysqli_fetch_array($query);
//   echo '<script>alert("anda berhasil login"); document.location="/resource/view/admin/index.php";</script>';
// }else{
//   echo '<script>alert("gagal login"); document.location="/Auth.php"</script>';
// }

?>
