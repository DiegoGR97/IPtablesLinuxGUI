<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<h1>Cambio de política de regla "INPUT"</h1>
<?php
	$ipolitics = $_POST['ipolitics'];
	if($ipolitics == 'ACCEPT'){
		exec('sudo iptables -P INPUT ACCEPT');
	} else if($ipolitics == 'DROP'){
		exec('sudo iptables -P INPUT DROP');
	}
	echo 'Se ha cambiado la política de INPUT a ' .  $ipolitics . '<br>';
?>
<a href="/">Regresar a formulario</a>
</body>
</html>
