<?php
$logcookie = $_COOKIE['logname'];

echo "
<html>
<head>
<title>Homepage</title>
</head>
<body>
<align ='right'>
Welcome $logcookie
<br><a href='logout.php'>Logout</a>
<center>
<h3>Shopper's Paradise</h3>
<h5>Shop till you drop!!!</h5>
      <hr>
      <br>
      <table>
      <tr align='center'>
        <td><a href='conf.php'>Confectionery</a></td>
      </tr>
      <tr align='center'>
        <td><a href='flowers.php'>Flowers</a></td>
      </tr>
      <tr align='center'>
        <td><a href='access.php'>Accessories</a></td>
      </tr>
      <tr align='center'>
        <td><a href='perf.php'>Perfumes</a></td>
      </tr>
      <tr align='center'>
        <td><a href='apparel.php'>Apparel</a></td>
      </tr>
</table>
</center>
</body>
</html>
";
?>