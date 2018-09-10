<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<h1>Willkommen to iptables GUI!</h1>
<!--
<h2>Cambio de políticas.</h2>
<form action="/politicas/inputP.php" method="POST">
	<label>Escoja política para poner en INPUT</label><br>
	<input type="radio" name="ipolitics" value="ACCEPT" id="ipolitics_accept">
	<label for="ipolitics_accept">Accept</label><br>
	<input type="radio" name="ipolitics" value="DROP" id="ipolitics_drop">
	<label for="ipolitics_drop">Drop</label><br>
	<input type="submit" name="submit"><br>
</form>
-->
<form action="./new/newRule.php">
	<input type="submit" value="New Rule">
</form>
<?php
	echo '<h3>Chain INPUT</h3>';
	$var = shell_exec('sudo iptables -nL INPUT');
	echo "<pre>$var</pre>";
	echo '<br><br>';

	echo '<h3>Chain OUTPUT</h3>';
	$var2 = shell_exec('sudo iptables -nL OUTPUT');
	echo "<pre>$var2</pre>";
	echo '<br><br>';			
?>
</body>
</html>
