<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>Rule added successfully</h1>
<?php
    $chain = $_POST['chain'];
    $politic = $_POST['politic'];
    shell_exec("sudo iptables -P $chain $politic");
?>
<a href="/">Home</a>
</body>
</html>