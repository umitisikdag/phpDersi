<?php
$con=mysqli_connect("localhost","umit","123456","my_db");
$sonuc = mysqli_query($con,"SELECT * FROM persons");
while($satir = mysqli_fetch_array($sonuc))
  {
  echo $satir['FirstName'] . " " . $satir['LastName'];
  echo "<br>";
  }
mysqli_close($con);
?>