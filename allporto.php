<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class=" container mt-5">
      <a href="/AddPortoController.php"><button>add porto</button></a>
    </div>
  <div class="container-fluid">
    <table class="table">
      <thead>
        <tr>
          <!-- <th scope="col">#</th> -->
          <th scope="col">No</th>
          <th scope="col">foto</th>
          <th scope="col">title</th>
          <th scope="col">framework</th>
          <th scope="col">action</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          include "App/lib/config.php";
          $items = mysqli_query($koneksi,"SELECT * FROM porto");
          $no = 1;
          while ($i = mysqli_fetch_array($items)) 
          {
        ?>
        <tr>
          <td><img src="images/<?= $i['foto'];?>"></td>
        </tr>
         <!-- echo "<tr>";
          echo "<td>".$no++."</td>";          
          // echo "<td>".$i['foto']."</td>";
          // echo "<td>'<img width='200px' height='140px' src='/images/".$i['foto']."'</td>";
          // echo "<td><img src='images/".$i['foto']."'></td>";
          echo "<td>".$i['title']."</td>";
          echo "<td>".$i['framework']."</td>";
          echo "<td><a href='/deletePorto.php?porto_id=$i[porto_id]'>hapus</a></td>";
        echo "</tr>"; -->
        <?php
          }
        ?>
        <!-- // echo "<form action='deletePorto.php'>"; -->
         <!-- echo "<input type='hidden' name='delete_id' value='".$i['porto_id']."'>";
            echo"<button class='btn btn-danger' type='submit' name='delete_img'>Hapus</button>";
          echo "</form>"; -->
        
      </tbody>
    </table>
  </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   
  </body>
</html>