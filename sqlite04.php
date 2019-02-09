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
   }

   $sql =<<<EOF
      INSERT INTO COMPANY (ID,NAME,AGE,ADDRESS,PATH,SALARY)
      VALUES (1, 'Paul', 32, 'California','Building1.jpg', 20000.00 );

      INSERT INTO COMPANY (ID,NAME,AGE,ADDRESS,PATH,SALARY)
      VALUES (2, 'Allen', 25, 'Texas', 'Building2.jpg',15000.00 );

      INSERT INTO COMPANY (ID,NAME,AGE,ADDRESS,PATH,SALARY)
      VALUES (3, 'Teddy', 23, 'Norway', 'Building3.jpg',20000.00 );

      INSERT INTO COMPANY (ID,NAME,AGE,ADDRESS,PATH,SALARY)
      VALUES (4, 'Mark', 25, 'Rich-Mond ','Building4.jpg', 65000.00 );
EOF;

   $ret = $db->exec($sql);
   if(!$ret){
      echo $db->lastErrorMsg();
   } else {
      echo "Records created successfully\n";
   }
   $db->close();
?>