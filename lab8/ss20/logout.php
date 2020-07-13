<?php
$logcookie = $_COOKIE['logname'];

setcookie('logname');

header("Location: information.html");
?>