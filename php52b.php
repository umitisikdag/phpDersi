<?php
$q=$_GET["q"];

$con=mysql_connect("localhost","umit","123456");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("my_db", $con);

$sql="SELECT * FROM persons WHERE Id = '".$q."'";

$result = mysql_query($sql);

echo "<table border='1'>
<tr>
<th>ID</th>
<th>Ad</th>
<th>Soyad</th>
<th>Yas</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['Id'] . "</td>";
  echo "<td>" . $row['FirstName'] . "</td>";
  echo "<td>" . $row['LastName'] . "</td>";
   echo "<td>" . $row['Age'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysql_close($con);
?>