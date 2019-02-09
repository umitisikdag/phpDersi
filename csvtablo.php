<?php
$rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
echo "<html><body><table>\n\n";
$f = fopen("test.csv", "r");
while (($line = fgetcsv($f)) !== false) {
        echo "<tr>";
        for ($i=0; $i<=5; $i++) {
			$color = '#'.$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)];
                echo "<td bgcolor=".$color.">" . htmlspecialchars($line[$i]) . "</td>";
		}
				echo "<td bgcolor=".$color.">" . "<img src=\"$line[6]\" width=\"50\" height=\"50\"></img>" . "</td>";
        
		
        echo "</tr>\n";
}
fclose($f);
echo "\n</table></body></html>";