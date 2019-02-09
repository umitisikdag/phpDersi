<?php
$con=mysqli_connect("localhost","umit","123456");
// Check connection

if (mysqli_connect_errno())
  {
  echo "Baglanti Basarisiz: " . mysqli_connect_error();
  }

// Create database
$sql="CREATE DATABASE my_db";

$sonuc=mysqli_query($con,$sql);

if ($sonuc)
  {
  echo "Veritabani yaratildi";
  }
else
  {
  echo "Su hata olustu: " . mysqli_error($con);
  }
?>