<?php
function myTest()
{
static $x=0;  //statik degiskenin her zaman son aldigi deger hafizadadir
/*once ilk fonksiyon cagrilmasinda degisken e deger atamasi yap
sonraki fonksiyon cagrilmalarinda degiskenin en son aldigi degeri hatirla */
$y=10;
echo $x,":",$y,"<br>";
$x++;   //bu artim uygulanir ancak fonkisyon yeniden cagrilinca x=0 olmaz
$y++;  //bu artim uygulanir ancak fonksiyon yeniden cagrilinca y=10 olur
}
myTest();
myTest();
myTest();
myTest();
myTest();
myTest();
?>