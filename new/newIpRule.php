

<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
    $chain = $_POST['chain'];
    $ip = $_POST['ip'];
    $jump = $_POST['jump'];

    if(filter_var($ip, FILTER_VALIDATE_IP) !== false){
        shell_exec("sudo iptables -A $chain -s $ip -j $jump");
        echo "Rule added successfully";
    } else {
        echo "Not a valid IP";
    }
?>
<a href="/">Home</a>
</body>
</html>

