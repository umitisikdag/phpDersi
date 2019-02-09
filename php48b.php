<?php
$con=mysqli_connect("localhost","umit","123456","my_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Baglantida su hata olustu: " . mysqli_connect_error();
  }
$sil="DELETE FROM persons";
mysqli_query($con,$sil);

mysqli_close($con);
echo "Tum kayitlar silindi";
?>