<?php
$con=mysqli_connect("localhost","umit","123456","my_db");
$sql="INSERT INTO persons (Id,FirstName, LastName, Age)
VALUES('$_REQUEST[numara]','$_POST[isim]','$_POST[soyisim]','$_POST[yil]')";
mysqli_query($con,$sql);
mysqli_close($con);
echo "1 kayit eklendi";

?>