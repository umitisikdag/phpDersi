<?php
function isimYaz($fisim,$fnoktalama)
{
echo $fisim. " Yilmaz" . $fnoktalama . "<br>";
}

echo "Adim ";
isimYaz("Ahmet",".");
echo "Kardesimin ismi ";
isimYaz("Demet","...");
echo "Dedemin ismi ";
isimYaz("Cemal","!");
?>