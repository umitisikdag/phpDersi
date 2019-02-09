<?php
$arabalar=array("Opel","Sahin","Mercedes","Anadol");
sort($arabalar);
$clength=count($arabalar);
for($x=0;$x<$clength;$x++)
   {
   echo $arabalar[$x];
   echo "<br>";
   }
echo "<br>";
$sayilar=array(4,-2,6,2,22,30);
sort($sayilar);
$nlength=count($sayilar);
for($x=0;$x<$nlength;$x++)
   {
   echo $sayilar[$x];
   echo "<br>";
   }
?>