<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
<link rel="stylesheet" type="text/css" href="cc.css">
</head>
<body>
<center><img src="logo.jpg" width="100%" height="150"></center>
<div class="container">
<h1>Form ka wax ka badalka macaamiisha</h1>

<?php
include('connect.php');
$sql="select * from sompower where id=".$_GET['uid'];
$retrev=mysql_query($sql,$con);
$row=mysql_fetch_array($retrev);
if (!$retrev) {
	die("could not get data".mysql_error());
}

?>

	<form action="update.php" method="POST">
	<label>ID:</label>
	<input type="text" name="id" value="<?php echo $row[0]  ?> ">
		<label>Taariikh:</label>
		<input type="date" name="date" value="<?php echo $row[1]  ?>" ><br>
		<label>Magaca Macmiilka</label>
		<input type="text" name="magaca" value="<?php echo $row[2]  ?>"><br>
		<label>Tell:</label>
		<input type="text" name="tellmac" value="<?php echo $row[3]  ?>"><br>
		<label>Laanta:</label>
		<input type="text" name="laanta" value="<?php echo $row[4]  ?>">
		<label>Aaga</label>
		<input type="text" name="aaga" value="<?php echo $row[5]  ?>">
		<label>Calaamada:</label>
		<input type="text" name="calaamada" value="<?php echo $row[6]  ?>"><br>
		<label>Supply No.</label>
		<input type="text" name="supply" value="<?php echo $row[7]  ?>"><br>	
		<label>Goobta Macmiilka  |Guri:</label>
		<input type="radio" name="goobta" value="guri"
		<?php if($row[8]=="guri"){ echo "checked";}?>>
		<label>Meherad:</label>
		<input type="radio" name="goobta" value="meherad" 
		<?php if($row[8]=="meherad"){ echo "checked";}?>><br>	

		<label>Nooca dabgalinta | 1 phase:</label>
		<input type="radio" name="nooca" value="1phase"
		 <?php if($row[9]=="1phase"){ echo "checked";}?>>
		<label>3 phase:</label>
		<input type="radio" name="nooca" value="3phase" 
		 <?php if($row[9]=="3phase"){ echo "checked";}?>><br>
		<label>Damiinul Maal</label>
		<input type="text" name="damiin" value="<?php echo $row[10]  ?>">
		<label>Tell:</label>
		<input type="text" name="tell" value="<?php echo $row[11]  ?>" ><br>
		<label>Numberka Saacada</label>
		<input type="text" name="numsaacada" value="<?php echo $row[12]  ?>">
		<label>Akhriska Saacada</label>
		<input type="text" name="akhsaacada" value="<?php echo $row[13]  ?>"><br>
		<label>Magaca Xidhaha</label>
		<input type="text" name="magacax" value="<?php echo $row[14]  ?>">
		<label>Taariikhda</label>
		<input type="text" name="taariikh" value="<?php echo $row[15]  ?>"><br>
		<input class="button button1" type="submit" value="Update" name="">
		<input class="button button2" type="reset" value="Cancel" name="">
	</form>
</div>
</body>
</html>