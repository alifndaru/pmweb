<?php 

include "App/lib/config.php";


$email = $_POST['email'];
$password = $_POST['password'];

$query = mysqli_query($koneksi, "SELECT * FROM users WHERE email='$email' AND password='$password'");
if (mysqli_num_rows($query)>0) {
  $item = mysqli_fetch_array($query);

  echo '<script>alert("anda berhasil login"); document.location="/resource/view/admin/index.php";</script>';
}else{
  echo '<script>alert("gagal login"); document.location="/resource/view/Auth.php"</script>';
}

?>
