<?php
$con=mysqli_connect("localhost","umit","123456","my_db");
$sql="INSERT INTO persons (Id,FirstName, LastName, Age)VALUES (5,'Halit', 'Yanik',45)";
$sql2="INSERT INTO persons (Id,FirstName, LastName, Age)VALUES (6,'Ercan', 'Guzelses',55)";
mysqli_query($con,$sql);
mysqli_query($con,$sql2);
mysqli_close($con);
echo "iki kayit eklendi";
?>