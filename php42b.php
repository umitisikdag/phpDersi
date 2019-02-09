<?php
$con=mysqli_connect("localhost","umit","123456","my_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Su nedenle baglanti basarisiz: " . mysqli_connect_error();
  }
$sql="INSERT INTO persons (Id,FirstName, LastName, Age)
VALUES
('$_POST[id]','$_POST[first_name]','$_POST[last_name]','$_POST[a_ge]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 kayit eklendi";
mysqli_close($con);
?>