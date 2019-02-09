<?php
// Create connection
$con=mysqli_connect("localhost","umit","123456","my_db");

// Check connection
if (mysqli_connect_errno($con)) 
  {
  echo "Basarisiz baglanti: " . mysqli_connect_error();
  }
  else
  {
  echo "Basarili baglanti";
  }
?>