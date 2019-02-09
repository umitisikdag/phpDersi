<?php
$con=mysqli_connect("localhost","umit","123456","my_db");
$sql="CREATE TABLE persons(Id INT,FirstName CHAR(30),LastName CHAR(30),Age INT)";
mysqli_query($con,$sql)

?>