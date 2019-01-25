<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
<link rel="stylesheet" type="text/css" href="cc.css">
</head>
<body>

<center><img src="logo.jpg" width="100%" height="150"></center>
<div class="container">
<div class="form">
<h1><u>Foom ka diiwaan gelinta macaamiisha cusub</u></h1>
<form action="register.php" method="POST">
		<label>Taariikh:</label>
		<input type="date" name="date"><br>
		<label>Magaca Macmiilka</label>
		<input class="cc" type="text" name="magaca">
		<label>Tell:</label>
		<input  type="text" name="tellmac"><br>
		<label>Laanta:</label>
		<input type="text" name="laanta">
		<label>Aaga</label>
		<input type="text" name="aaga">
		<label>Calaamada:</label>
		<input type="text" name="calaamada"><br>
		<label>Supply No.</label>
		<input class="cc" type="text" name="supply"><br>	
		<label>Goobta Macmiilka  |Guri:</label>
		<input type="radio" name="goobta" value="guri">
		<label>Meherad:</label>
		<input type="radio" name="goobta" value="meherad"><br>	
		<label>Nooca dabgalinta | 1 phase:</label>
		<input type="radio" name="nooca" value="1phase">
		<label>3 phase:</label>
		<input type="radio" name="nooca" value="3phase"><br>
		<label>Damiinul Maal</label>
		<input type="text" name="damiin">
		<label>Tell:</label>
		<input type="text" name="tell"><br>
		<label>Numberka Saacada</label>
		<input type="text" name="numsaacada">
		<label>Akhriska Saacada</label>
		<input type="text" name="akhsaacada"><br>
		<label>Magaca Xidhaha</label>
		<input type="text" name="magacaxidhaha">
		<label>Taariikhda</label>
		<input type="date" name="taariikh"><br>
		<input class="button button1" type="submit" value="Save" name="">
		<input class="button button2" type="reset" value="Cancel" name="">
	</form>
</div>
</div>
</body>
</html>