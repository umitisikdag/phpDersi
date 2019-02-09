<?php
//Satir satir dosya okuma
$file = fopen("merhaba.txt", "r") or exit("Dosya acilamiyor!");

while(!feof($file))   
  {
  echo fgets($file). "<br>";
  }
fclose($file);
?>