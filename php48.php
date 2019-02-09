<?php
$con=mysqli_connect("localhost","umit","123456","my_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Baglanti Hatamiz: " . mysqli_connect_error();
  }
$sql="DELETE FROM persons WHERE LastName='Griffin'";
mysqli_query($con,$sql);

mysqli_close($con);
echo "Soyadi Griffin olan tum kayitlar silindi";
?>