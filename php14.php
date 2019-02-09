<?php
$favrenk="mavi";
switch ($favrenk)
{
case "kirmizi":
  echo "Kirmizi seviyorsunuz";
  break;
case "mavi":
  echo "Mavi seviyorsunuz";
  break;
case "yesil":
  echo "Yesil seviyorsunuz";
  break;
case "sari":
  echo "Sari seviyorsunuz";
  break;
default:
  echo "Kirmizi,mavi,yesil yada sari sevmiyorsunuz";
  echo "<br>";
  echo "Siz aslinda ".$favrenk." seviyorsunuz";
}
?>