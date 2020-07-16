<?php
$hn = 'localhost';
$un = 'root';
$pw = '';
$db = 'ASM';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_errno) die("Connect SQL Fail!!!");
?>

