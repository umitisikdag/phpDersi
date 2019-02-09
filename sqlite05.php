<?php
   class MyDB extends SQLite3
   {
      function __construct()
      {
         $this->open('umit02.db');
      }
   }
   $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
   } else {
      echo "Opened database successfully\n";
	  echo "<br><br>";
   }

   $sql =<<<EOF
      SELECT * from COMPANY;
EOF;

   $ret = $db->query($sql);
   while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
      echo "ID = ". $row['ID'] . "\n";
      echo "NAME = ". $row['NAME'] ."\n";
      echo "ADDRESS = ". $row['ADDRESS'] ."\n";
	  echo "<br>";
	  echo '<img src="resimler/'. $row['PATH'].'">'.'</img>';
	  echo "<br>";
      echo "SALARY =  ".$row['SALARY'] ."\n\n";
	  echo "<br>";
   }
   echo "Operation done successfully\n";
   $db->close();
?>