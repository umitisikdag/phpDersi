<?php
$t=date("H");
echo $t;
echo "<br>";
if ($t<"12")
  {
  echo "Iyi Sabahlar";
  }
	else if($t<"21")
	{
	echo "Iyi Aksamlar";
	}
		else
		{
		echo "Iyi Geceler";
		}

?>