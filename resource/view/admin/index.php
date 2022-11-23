<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <h2>Dashboard admin</h2>
  <br>
  <?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:/index.php?pesan=belum_login");
	}
	?>
  <script>alert("selamat datang, <?= $_SESSION['email']; ?>! berhasil login")</script>
  

  <div class="m-4">
    <a href="/App/Http/LogoutController.php"><button>logout</button></a>
    <a href="/allporto.php"><button>all porto</button></a>
    <a href="/AddPortoController.php"><button>add porto</button></a>
  </div>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">contact id</th>
      <th scope="col">Email</th>
      <th scope="col">Subjek</th>
      <th scope="col">isi</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
    <?php 
      include 'App/lib/config.php';
      // $no = 1;
      $items = mysqli_query($koneksi,"SELECT * FROM contact");
      while ($i = mysqli_fetch_array($items)) {
    echo "<tr>";
      echo "<td>".$i['contact_id']."</td>";
      echo "<td>".$i['email']."</td>";
      echo "<td>".$i['subjek']."</td>";
      echo "<td>".$i['isi']."</td>";
      echo "<td><a href='/App/Http/DeleteController.php?contact_id=$i[contact_id]'>hapus</a></td>";
    echo "</tr>";
      }
    ?>
  </tbody>
</table>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u +LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>