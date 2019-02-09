<?php
$con=mysqli_connect("localhost","umit","123456","my_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Su sorun olustu: " . mysqli_connect_error();
  }

//$result = mysqli_query($con,"SELECT * FROM Persons
//WHERE FirstName='Peter'");
$sql="SELECT * FROM persons WHERE Id=4";
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result))
  {
  echo $row['FirstName'] . " " . $row['LastName'];
  echo "<br>";
  }
?>