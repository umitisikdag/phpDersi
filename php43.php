<?php
$con=mysqli_connect("localhost","umit","123456","my_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Baglanti su hatayi verdi: " . mysqli_connect_error();
  }
$sql="SELECT * FROM persons";
$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result))
  {
  echo $row['FirstName'] . " " . $row['LastName'];
  echo "<br>";
  }

mysqli_close($con);
?>