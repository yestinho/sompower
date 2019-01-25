<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
<style>
	
.button {
    background-color: aqua;
  
    color: black;
    padding: 15px 32px;
    text-align: center;
  
    display: inline-block;
    font-size: 30px;
    margin:0 auto;
    margin-left: 30px;
    font-family: "times new roman";
    width: 300px;
}
.button:hover{
	background-color: lightyellow;
}
table{
	border-collapse: collapse;
	background-color: white;
}
td,th{
	text-align: left;
}
tr:hover{
	background-color: yellow;
}
th{
	background-color: lightblue;
}
</style>
</head>
<body bgcolor="lightgray">
<center><img src="logo.jpg" width="100%" height="150"></center>
<div class="container">
<a href="add.php"><input type="submit" class="button button1" name="" value="Add New  Customer"></a>
<center>
<h1>Liiska Macaamiisha Shirkadda</h1></center>
	<?php
include('connect.php');
$sql="select * from sompower";
$retrev=mysql_query($sql,$con);
if (!$retrev) {
	die("could not get data".mysql_error());
}

echo"<table border='1'>
				<tr>
				<th>ID</th>
					<th>Tarikh</th>
					<th>Magaca_Macmilka</th>
					<th>Tell_Macmilka</th>
					<th>Lanta</th>
					<th>Aaga</th>
					<th>Calamada</th>
					<th>Supply_No</th>
					<th>Goob-macmilka</th>
					<th>Nooc-dabka</th>
					<th>Damiin</th>
					<th>Tell</th>
					<th>No.Sacada</th>
					<th>Akhriska_Sacada</th>
					<th>Magac-xidhaha</th>
					<th>Tarikhda</th>
					<th>Action</th>
				</tr>";
			while ($row=mysql_fetch_array($retrev)){
				echo "<tr>";
				echo "<td>".$row[0]."</td>";
				echo "<td>".$row[1]."</td>";
				echo "<td>".$row[2]."</td>";
				echo "<td>".$row[3]."</td>";
				echo "<td>".$row[4]."</td>";
				echo "<td>".$row[5]."</td>";
				echo "<td>".$row[6]."</td>";
				echo "<td>".$row[7]."</td>";
				echo "<td>".$row[8]."</td>";
				echo "<td>".$row[9]."</td>";
				echo "<td>".$row[10]."</td>";
				echo "<td>".$row[11]."</td>";
				echo "<td>".$row[12]."</td>";
				echo "<td>".$row[13]."</td>";
				echo "<td>".$row[14]."</td>";
				echo "<td>".$row[15]."</td>";
				echo "<td><a href='edit.php?uid=$row[0]'>Edit</a>|<a href='delete.php?uid=$row[0]'>Delete</a></td>";
				
				echo "</tr>";
				}
			echo "</table>";





?>
</div>

</body>
</html>