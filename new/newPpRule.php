<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
    $chain = $_POST['chain'];
    $protocol = $_POST['protocol'];
    $port = $_POST['port'];
    $jump = $_POST['jump'];
    shell_exec("sudo iptables -A $chain -p $protocol -dport $port -j $jump");
    echo "Rule added successfully";
?>
<a href="/">Home</a>
</body>
</html>