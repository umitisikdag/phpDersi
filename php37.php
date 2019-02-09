<?php
$to = "umitisikdag@beykent.edu.tr";
$subject = "Test";
$message = "Bu metin icerik kismidir";
$from = "ali@aa.com";
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
echo "Mail Sent.";
?>