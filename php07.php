<?php
$x=5; // global degisken
$y=10; // global degisken

echo "y nin fonksiyon cagrimindan once degeri : ", $y; //sonuc 10 olarak yazilir

function myTest()
{
global $x,$y; //global degiskeni fonksiyon disindan cagiriyoruz
$y=$x+$y;    //y=x+y 
}

myTest();
echo "<br>";
echo "y nin fonksiyon cagrimindan sonra degeri : ", $y; // sonuc 15 olarak yazilir
?>