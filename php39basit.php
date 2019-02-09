<?php
//Veritabani oluşturma
$con=mysqli_connect("localhost","umit","123456");
$sql="CREATE DATABASE my_db";
mysqli_query($con,$sql)
?>