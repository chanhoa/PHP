<?php
$dbname = 'mysql';
if (!mysqli_connect('127.0.0.1', 'root', ''))
{
    echo "Could not connect to mysql";
    exit();
}
$sql = "SHOW TABLES FROM $dbname";
$connect_mysql = mysqli_connect('127.0.0.1', 'root', '');
$resutl = mysqli_query($connect_mysql, $sql);
if (!$resutl)
    $resutl = mysqli_query($sql);
echo "The tables from the database are: <br><br>";
if (!$resutl)
{
    echo "DB Error, Unable to list tables<br>";
    echo "MySQL Error: ".mysqli_error();
    exit();
}
while ($row = mysqli_fetch_row($resutl))
{
    echo "Table: {$row[0]}<br>";
}
?>