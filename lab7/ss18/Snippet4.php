<?php
$connect_mysql = mysqli_connect('localhost', 'root', '', 'publications');
$resutl = mysqli_query($connect_mysql, "select * from customer");
$row = $resutl->num_rows;
echo "The table contains $row rows.<br>";
mysqli_close($connect_mysql);
echo "The connection to the database has been closed."
?>