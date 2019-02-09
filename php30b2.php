<?php
$alpha = array ("01","02","03","04","05","06","07","08","09","10");
$beta = array ("Ev1","Ev2","Ev3","Ev4","Ev5","Ev6","Ev7","Ev8","Ev9","Ev10");

for ($i=0; $i<=9; $i++)
{
echo '<a href=php30c.php?ad='.$beta[$i].'&kapino='.$alpha[$i].'>'.$beta[$i]. 'in sahibi</a> <br>';


}

?>

http://localhost/tests/php/php30c.php?ad=Ev2&kapino=02