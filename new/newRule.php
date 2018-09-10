<!DOCTYPE html>
<html>
<head>
    <title>Rule Creation</title>
</head>
<body>
<h1>Create your new rule</h1>
<!--
<hr>
<h3>Change Chain Politics</h3>
<form action="./createdRule.php" method="port">
	<label>Escoja política para poner en INPUT</label><br>
	<input type="radio" name="ipolitics" value="ACCEPT" id="ipolitics_accept">
	<label for="ipolitics_accept">Accept</label><br>
	<input type="radio" name="ipolitics" value="DROP" id="ipolitics_drop">
	<label for="ipolitics_drop">Drop</label><br>
	<input type="submit" name="submit" value="Submit"><br>
</form>
<hr>
-->
<hr>
<h3>Add IP Rules</h3>
<form action="./newIpRule.php" method="post">
    <label>Choose the chain to modify</label><br>
    <input type="radio" name="chain" value="INPUT" id="chain_input">
    <label for="chain_input">INPUT</label><br>
    <input type="radio" name="chain" value="OUTPUT" id="chain_output">
    <label for="chain_output">OUTPUT</label><br>
    <label>Choose the source IP address</label><br>
    <input type="text" name="ip"><br>
    <label>Choose the jump that this IP address will have</label><br>
    <input type="radio" name="jump" value="ACCEPT" id="jump_accept">
    <label for="jump_accept">ACCEPT</label><br>
    <input type="radio" name="jump" value="DROP" id="jump_drop">
    <label for="jump_drop">DROP</label><br>
    <input type="radio" name="jump" value="REJECT" id="jump_reject">
    <label for="jump_reject">REJECT</label><br>
    <input type="submit" name="submit" value="Submit">
</form>
<hr>
<h3>Add port/protocol rules</h3>
<form action="./newPpRule.php" method="post">
<label>Choose the chain to modify</label><br>
    <input type="radio" name="chain" value="INPUT" id="chain_input2">
    <label for="chain_input2">INPUT</label><br>
    <input type="radio" name="chain" value="OUTPUT" id="chain_output2">
    <label for="chain_output2">OUTPUT</label><br>
    <label>Choose the protocol</label><br>
    <input type="radio" name="protocol" value="tcp" id="protocol_tcp">
    <label for="protocol_tcp">TCP</label><br>
    <input type="radio" name="protocol" value="udp" id="protocol_udp">
    <label for="protocol_udp">UDP</label><br>
    <label>Choose the port</label><br>
    <input type="text" name="port"><br>
    <label>Choose the jump that this port will have</label><br>
    <input type="radio" name="jump" value="ACCEPT" id="jump_accept2">
    <label for="jump_accept2">ACCEPT</label><br>
    <input type="radio" name="jump" value="DROP" id="jump_drop2">
    <label for="jump_drop2">DROP</label><br>
    <input type="radio" name="jump" value="REJECT" id="jump_reject2">
    <label for="jump_reject2">REJECT</label><br>
    <input type="submit" name="submit" value="Submit">
<hr>
</body>
</html>