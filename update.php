
<?php
include('connect.php');
$id=$_POST['id'];
$tariikh=$_POST['date'];
$magac=$_POST['magaca'];
$tellmac=$_POST['tellmac'];
$laanta=$_POST['laanta'];
$aaga=$_POST['aaga'];
$calaamad=$_POST['calaamada'];
$supply=$_POST['supply'];
$goob=$_POST['goobta'];
$nooc=$_POST['nooca'];
$damiin=$_POST['damiin'];
$tell=$_POST['tell'];
$numsaacada=$_POST['numsaacada'];
$akhsaacada=$_POST['akhsaacada'];
$magaxidhaha=$_POST['magacax'];
$taarikh=$_POST['taariikh'];

$sql="UPDATE sompower SET Taariikh='$tariikh',Magaca_Macmiilka='$magac',Tell_macmiilka='$tellmac',Laanta='$laanta',Aaga='$aaga',Calaamada='$calaamad',Supply_No='$supply',Goobta_Macmiilka='$goob',Nooca_dabgalinta='$nooc',Damiinul_Maal='$damiin',Tell='$tell',Numberka_Saacada='$numsaacada',Akhriska_Saacada='$akhsaacada',Magaca_xidhaha='$magaxidhaha',Taariikhda='$taarikh'
 WHERE id=$id";
$up=mysql_query($sql,$con);

header("location:index.php");
mysql_close($con);

?>