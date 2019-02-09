<?php
   class MyDB extends SQLite3
   {
      function __construct()
      {
         $this->open('umit02.db');
      }
   }
   /*----------------------------*/
   function getUrl() {
  $url  = @( $_SERVER["HTTPS"] != 'on' ) ? 'http://'.$_SERVER["SERVER_NAME"] :  'https://'.$_SERVER["SERVER_NAME"];
  $url .= ( $_SERVER["SERVER_PORT"] !== 80 ) ? ":".$_SERVER["SERVER_PORT"] : "";
  $url .= $_SERVER["REQUEST_URI"];
  return $url;
}
$myurl=getUrl();
//print_r(parse_url($myurl));

$path= parse_url($myurl, PHP_URL_PATH);

$pathComponents = explode("/", trim($path, "/")); // trim to prevent
                                                 // empty array elements
$vl= $pathComponents[3]; // http://localhost/tests/php/sqlite05slim.php/1
   
   
   /*----------------------------------*/
   $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
   } else {
      //echo "Opened database successfully\n";
	  //echo "<br><br>";
   }

   $sql ="SELECT * from COMPANY WHERE ID=$vl";
   $ret = $db->query($sql);
   
   echo "<table border='1'>
	<tr>
	<th>ID</th>
	<th>Name</th>
	<th>Address</th>
	<th>Picture</th>
	<th>Salary</th>
	</tr>";
   
   while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
      echo "<tr>";
      echo "<td>" . $row['ID'] . "</td>";
      echo "<td>" . $row['NAME'] ."</td>";
      echo "<td>" . $row['ADDRESS'] ."</td>";
	  echo '<td>' .'<img src="../resimler/'. $row['PATH'].'">'.'</img>'.'</td>';
      echo "<td>" .$row['SALARY'] ."</td>";
	  echo "</tr>";
   }
   echo "</table>";
   //echo "Operation done successfully\n";
   $db->close();
?>