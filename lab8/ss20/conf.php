<html>
<head>
    <title>Confectionery Details</title>
</head>
<body>
<?php
$logcookie = $_COOKIE['logname'];
echo "
<body>
<align = 'right'>
Welcome $logcookie
<br><a href='logout.php'>Logout</a>
<center>
<h3>Shopper's Paradise</h3>
<h5>Shop till you drop!!!</h5>
<hr>
<br>
<table border='1'>
<tr align='center'>
<th>Code</th>
<th>Name</th>
<th>Price</th>
</tr>
<tr align='center'>
<td>C001</td>
<td><a href=''>Vanilla Crush</a></td>
<td>$4.00</td>
</tr>
<tr align='center'>
<td>C002</td>
<td><a href=''>Choco Chunks</a></td>
<td>$7.00</td>
</tr>
<tr align='center'>
<td>C002</td>
<td><a href=''>Strawberry Delight</a></td>
<td>$9.00</td>
</tr>
</table>
</center>      
</body>
";
?>
</body>
</html>