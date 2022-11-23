<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>
    .card{
      margin: 90px;
    }
    .form{
      margin: 30px;
    }
    .card-title{
      margin-top: 30px;
      /* margin-bottom: 20px; */
      padding-bottom: 10px;
      margin-left: 500px;
    }
    .back{
      margin-left: 30px;
    }
  </style>
</head>
<body>
  <?php
  include "config.php";
  $id = $_GET['porto_id'];

    $result = mysqli_query($koneksi,"SELECT * FROM porto WHERE porto_id  = '$id'");
    $test = mysqli_fetch_array($result);
    // var_dump($result);

    $title = $test['title'];
    $framework = $test['framework'];
    $foto = $test['foto'];
    // var_dump($foto);
  ?>
  <div class="m-4 card">
    <div class="card-title">
      <h3>edit porto</h3>
    </div>
    <div class="back">
      <a href="/allporto.php"><button class="btn btn-danger">Back</button></a>
    </div>
    <form action="/editPortoProses.php" method="POST" enctype="multipart/form-data" class="form">
      <div class="mb-3">
        <!-- <input type="hidden" name="porto_id" value=""> -->
        <label for="" class="form-label">Title</label>
        <input type="text" name="title" class="form-control" value="<?=$title ?>">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">framework</label>
        <input type="text" name="framework" class="form-control" value="<?= $framework?>">
      </div>
      <div class="mb-3">
        <label class="form-label">Upload</label>
        <div class="img-thumbnail">
          <img src="src="images/<?php echo $foto ?>">
          </div>
        <input type="file" name="foto" class="form-control" value="<?= $foto ?>" name="foto">
        <input type="hidden" name="fotolama" class="form-control" value="<?= $foto ?>" name="foto">

      </div>
      <button type="submit" value="submit" class="btn btn-primary">Submit</button>
      <!-- <a href="/allporto.php"><button class="btn btn-primary">Back</button></a> -->
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u +LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>