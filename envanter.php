<?php
$con=mysqli_connect("localhost","umit","123456","my_db");
$id= $_POST['binaid'];
$sonuc = mysqli_query($con,"SELECT * FROM Persons WHERE Id=$id");
$satir = mysqli_fetch_array($sonuc);
?>
<html>
<body>
<table border="1">
<tr>
<th colspan="18">BINA KIMLIK KARTI</th>
</tr>
<tr>
<td><b>1</b></td>
<td>Bina ID</td>
<td colspan="16"><?php echo $satir['Id']; ?></td>
</tr>
<tr>
<td><b>2</b></td>
<td>Bina Yasi</td>
<td colspan="6"><?php echo $satir['FirstName']; ?></td>
<td colspan="2"> X</td>
<td colspan="6"><?php echo $satir['LastName']; ?></td>
<td colspan="2"> </td>
</tr>
<tr>
<td><b>3</b></td>
<td>Bina Turu</td>
<td colspan="2"><?php echo $satir['Age']; ?></td>
<td colspan="2"> </td>
<td colspan="2">2-Yigma</td>
<td colspan="2"> X</td>
<td colspan="2">3-Ahsap</td>
<td colspan="2"> </td>
<td colspan="2">4-Diger</td>
<td colspan="2"> </td>
</tr>
<tr>
<td><b>4</b></td>
<td>Serbest Kat Adedi</td>
<td colspan="16"> 5</td>
</tr>
<tr>
<td><b>5</b></td>
<td>Bodrum Kat</td>
<td colspan="6">Var</td>
<td colspan="2"> X</td>
<td colspan="6">Yok</td>
<td colspan="2"> </td>
</tr>
<tr>
<td><b>5</b></td>
<td>Plan Geometrisi</td>
<td colspan="6">Duzenli</td>
<td colspan="2"> X</td>
<td colspan="6">Duzensiz</td>
<td colspan="2"> </td>
</tr>
<tr>
<td><b>6</b></td>
<td>Bina Genisligi, On Cephe(m)</td>
<td colspan="16"> 7,3</td>
</tr>
<tr>
<td><b>7</b></td>
<td>Yapi Nizami</td>
<td colspan="4">1-Ayrik</td>
<td colspan="2"> </td>
<td colspan="3">2-Bitisik Arada</td>
<td colspan="2"> X</td>
<td colspan="3">3-Bitisik Kosede</td>
<td colspan="2"> </td>
</tr>
<tr>
<td><b>8</b></td>
<td>Bitisik Binalarda Yukseklik Farki</td>
<td colspan="6">Var</td>
<td colspan="2"> X</td>
<td colspan="6">Yok</td>
<td colspan="2"> </td>
</tr>
<tr>
<td><b>9</b></td>
<td>Bitisik Binalarda Doseme Seviyesi Farki</td>
<td colspan="6">Var</td>
<td colspan="2"> X</td>
<td colspan="6">Yok</td>
<td colspan="2"> </td>
</tr>
<tr>
<td><b>10</b></td>
<td>Mevcut Hasar Durumu</td>
<td colspan="6">Var</td>
<td colspan="2"> </td>
<td colspan="6">Yok</td>
<td colspan="2"> X</td>
</tr>
<tr>
<td><b>11</b></td>
<td>Tarihi Yuksek Binaya Bitisik mi?</td>
<td colspan="6">Evet</td>
<td colspan="2"> </td>
<td colspan="6">Hayir</td>
<td colspan="2"> X</td>
</tr>
<tr>
<td><b>12</b></td>
<td>Bina Restorasyon Gormus mu?</td>
<td colspan="4">1-Evet,Tamamen Gormus</td>
<td colspan="2"> </td>
<td colspan="3">2-Hayir,Gormemis</td>
<td colspan="2"> </td>
<td colspan="3">3-Kismen Gormus</td>
<td colspan="2"> X</td>
</tr>
<tr>
<td><b>13</b></td>
<td>Bina Islevi</td>
<td colspan="2">1-Tamami Ticaret</td>
<td colspan="2"> </td>
<td colspan="2">2-Tamami Konut</td>
<td colspan="2"> </td>
<td colspan="2">3-Ticaret+Konut</td>
<td colspan="2"> X</td>
<td colspan="2">4-Diger</td>
<td colspan="2"> </td>
</tr>
<tr>
<td><b>14</b></td>
<td>Binada Cikma</td>
<td colspan="3">Var</td>
<td colspan="4"> X</td>
<td colspan="2">Yok</td>
<td colspan="4"></td>
</tr>
<tr>
<td><b>15</b></td>

<td colspan="18" rowspan="6"><CENTER><img src="2.jpg" width="600" height="400"> </img></CENTER></td>
</td>

</tr>

</body>
</html>







