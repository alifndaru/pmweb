<?php 
// mengaktifkan session
session_start();
 
// menghapus semua session
session_destroy();
 
// mengalihkan halaman sambil mengirim pesan logout

// echo '<script>alert("berhasil logout") document.location="/index.php"</script>'
header("location:/index.php?pesan=logout");
?>