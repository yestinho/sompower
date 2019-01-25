
<?php
include('connect.php');

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
$magaxidhaha=$_POST['magacaxidhaha'];
$taarikh=$_POST['taariikh'];

$sql="INSERT INTO sompower"."(`Taariikh`, `Magaca_Macmiilka`, `Tell_macmiilka`, `Laanta`, `Aaga`, `Calaamada`, `Supply_No`, `Goobta_Macmiilka`, `Nooca_dabgalinta`, `Damiinul_Maal`, `Tell`, `Numberka_Saacada`, `Akhriska_Saacada`, `Magaca_xidhaha`, `Taariikhda`)". 
"VALUES".
"('$tariikh','$magac','$tellmac','$laanta','$aaga','$calaamad','$supply','$goob','$nooc','$damiin','$tell','$numsaacada','$akhsaacada','$magaxidhaha','$taarikh')";

$register=mysql_query($sql,$con);
if (!$register) {
echo "not data inserted".mysql_error();
}
header("location:index.php");
mysql_close($con);


/*    
create table sompower(
      id int PRIMARY KEY AUTO_INCREMENT,
    Taariikh date not null,
    Magaca_Macmiilka varchar(30) not null,
    Tell int ,
    Laanta varchar(30),
    Aaga varchar(30),
    Calaamada varchar(30),
    Supply_No varchar(30) not null,
    Goobta_Macmiilka varchar(30),
    Nooca_dabgalinta varchar(30),
    Damiinul_Maal varchar(30),
    Tell int ,
    Numberka_Saacada varchar(30),
    Akhriska_Saacada varchar(30),
    Magaca_xidhaha varchar(30),
    Taariikhda date
    )

*/
?>