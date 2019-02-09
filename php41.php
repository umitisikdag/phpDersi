<?php
$con=mysqli_connect("localhost","umit","123456","my_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Baglanti su nedenle basarisiz: " . mysqli_connect_error();
  }
//Metod 1  
$sql1="INSERT INTO persons (Id,FirstName, LastName, Age)VALUES (1,'Peter', 'Griffin',35)";
mysqli_query($con,$sql1);
$sql2="INSERT INTO persons (Id,FirstName, LastName, Age)VALUES (2,'Louis', 'Griffin',35)";
mysqli_query($con,$sql2);
$sql3="INSERT INTO persons (Id,FirstName, LastName, Age)VALUES (3,'Glenn', 'Quagmire',33)";
mysqli_query($con,$sql3);
$sql4="INSERT INTO persons (Id,FirstName, LastName, Age)VALUES (4,'Joseph', 'Swanson',33)";
mysqli_query($con,$sql4);
/*Metod 2
mysqli_query($con,"INSERT INTO persons (Id,FirstName, LastName, Age)
VALUES (2,'Louis', 'Griffin',35)");
mysqli_query($con,"INSERT INTO persons (Id,FirstName, LastName, Age) 
VALUES (3,'Glenn', 'Quagmire',33)");
mysqli_query($con,"INSERT INTO persons (Id,FirstName, LastName, Age) 
VALUES (4,'Joseph', 'Swanson',33)");
mysqli_close($con);
*/
echo "dort kayit eklendi";
?>