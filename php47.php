<?php
$con=mysqli_connect("localhost","umit","123456","my_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Baglantida su hata olustu: " . mysqli_connect_error();
  }
$sql= "UPDATE persons SET Age=1 WHERE Id=4";
mysqli_query($con,$sql);
$sql2="UPDATE persons SET Age=2 WHERE Id=2";
mysqli_query($con,$sql2);
mysqli_close($con);
echo "Update Basarili";
?>