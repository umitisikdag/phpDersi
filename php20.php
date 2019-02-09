<?php
$yas=array("Ali"=>"35","Veli"=>"37","Cemil"=>"43");
asort($yas); //asort (val),ksort (key),arsort (val reverse),krsort (key reverse)

foreach($yas as $anahtar=>$deger)
    {
    echo "Key=" . $anahtar . ", Value=" . $deger;
    echo "<br>";
    }
?>