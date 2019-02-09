<?php
$con=mysqli_connect("localhost","umit","123456","my_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$sql="SELECT * FROM persons ORDER BY Age";
$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result))
  {
  echo " " . $row['Age'];
  echo " ".$row['FirstName'];
  echo " " . $row['LastName'];
  echo "<br>";
  }

mysqli_close($con);
?>