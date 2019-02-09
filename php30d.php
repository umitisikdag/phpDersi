<?php 
$a=$_REQUEST["sayi1"];  
$b=$_REQUEST["sayi2"]; 
$c=$_REQUEST["tur"]; 
if ($c==1)
{
 topla($a,$b);	
}
else if ($c==2)
{
	 carp($a,$b);
}
else if ($c==3)
{
cikart($a,$b);
}
elseif($c==4)
{
bol($a,$b);
}
function carp($x,$y)
 {
	$c=$x*$y; 
	echo "Carpim= " .$c; 
 }
function topla($x,$y)
 {
	$c=$x+$y; 
	echo "Toplam= " .$c; 
 }
 function cikart($x,$y)
 {
	$c=$x-$y; 
	echo "Fark= " .$c; 
 }
 function bol($x,$y)
 {
	$c=$x/$y; 
	echo "Bolum= " .$c; 
 }
 
 
 ?> 


