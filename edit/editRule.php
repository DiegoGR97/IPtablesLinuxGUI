<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
<h1>Edit Politics for Chains</h1>
<hr>
<form action="./editPoliticChain.php" method="post">
    <label>Choose the Chain</label><br>
    <input type="radio" name="chain" value="INPUT" id="chain_input">
	<label for="chain_input">INPUT</label><br>
    <input type="radio" name="chain" value="OUTPUT" id="chain_output">
	<label for="chain_output">OUTPUT</label><br>
	<label>Choose The Politic</label><br>
	<input type="radio" name="politic" value="ACCEPT" id="politic_accept">
	<label for="politics_accept">ACCEPT</label><br>
	<input type="radio" name="politic" value="DROP" id="politic_drop">
	<label for="politic_drop">DROP</label><br>
	<input type="submit" name="submit" value="Submit"><br>
</form>
<hr>
</body>
</html>