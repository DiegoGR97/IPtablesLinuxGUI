<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<h1>Willkommen to iptables GUI!</h1>
<h3>Cambio de políticas.</h3>
<form action="/politicas/inputP.php" method="POST">
	<label>Escoja política para poner en INPUT</label><br>
	<input type="radio" name="ipolitics" value="ACCEPT" id="ipolitics_accept">
	<label for="ipolitics_accept">Accept</label><br>
	<input type="radio" name="ipolitics" value="DROP" id="ipolitics_drop">
	<label for="ipolitics_drop">Drop</label><br>
	<input type="submit" name="submit">
</form>
<?php
	/*exec('sudo iptables -P INPUT ACCEPT');*/
?>
</body>
</html>
