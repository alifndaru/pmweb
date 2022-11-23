<?php 
include "config.php";
$querySelect = "SELECT * FROM porto WHERE porto_id = ".$_GET['porto_id'];
$ResultSelectStmt = mysqli_query($koneksi,$querySelect);
$fetchRecords = mysqli_fetch_assoc($ResultSelectStmt);

$fetchImgTitleName = $fetchRecords['foto'];
// var_dump($fetchImgTitleName);

$createDeletePath = "images/".$fetchImgTitleName;

if(unlink($createDeletePath))
{
  $liveSqlQQ = "DELETE FROM porto WHERE porto_id = ".$fetchRecords['porto_id'];
  $rsDelete = mysqli_query($koneksi, $liveSqlQQ);	
  
  if($rsDelete)
  {
    header('location:allporto.php?success=true');
    exit();
  }
}
else
{
  $displayErrMessage = "Unable to delete Image";
}
?>