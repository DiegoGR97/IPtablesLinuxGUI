<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<h1>Willkommen to iptables GUI!</h1>
<form action="./new/newRule.php">
	<input type="submit" value="New Rule">
</form>
<form action="./edit/editRule.php">
	<input type="submit" value="New Edit"> 
</form>
<form action="./drop/dropRule.php">
	<input type="submit" value="New Delete"> 
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
