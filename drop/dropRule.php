<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>Drop Chain Rule</h1>
<hr>
<form action="./ruleDropped.php" method="post">
    <label>Choose the Chain</label><br>
    <input type="radio" name="chain" value="INPUT" id="chain_input">
	<label for="chain_input">INPUT</label><br>
    <input type="radio" name="chain" value="OUTPUT" id="chain_output">
	<label for="chain_output">OUTPUT</label><br>
    <label>Choose the number of the rule</label>
    <input type="number" name="number"><br>
    <input type="submit" name="submit" value="Submit">
</form>
<hr>
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