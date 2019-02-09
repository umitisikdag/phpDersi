<?php
//Karakter karakter dosya okuma
$file = fopen("merhaba.txt", "r") or exit("Dosya acilamiyor!");

while(!feof($file))
  {
  echo fgetc($file). "<br>";
  }
fclose($file);
?>