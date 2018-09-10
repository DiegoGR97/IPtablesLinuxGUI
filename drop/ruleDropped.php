<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
    $chain = $_POST['chain'];
    $number = $_POST['number'];
    shell_exec("sudo iptables -D $chain $number");
    echo 'Rule deleted.';
?>
</body>
</html>