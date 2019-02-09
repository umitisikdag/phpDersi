<?php
//deger dondurme
function topla($x,$y)
{
$toplam=$x+$y;
return $toplam;
}
function carp($x,$y)
{
$carpim=$x*$y;	
return $carpim;	
}
function hesapla($a,$b)
{
echo "<br>";	
echo "Toplama sonucu = " . topla($a,$b);
echo "<br>";
echo "Carpim sonucu= " .carp($a,$b);
}
hesapla(12,10);

?>