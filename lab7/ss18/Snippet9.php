<?php
$sever = "";
$username = "root";
$password = "";
$conn = mysqli_connect($sever, $username, $password);
if ($conn)
{
    echo "Connection established<br>";
}
else
{
    die("Unable to connect<br>");
}
$mysql_db = mysqli_select_db($conn, 'publications');
if ($mysql_db)
{
    echo "Connected to the database<br>";
}
else
{
    die("Unable to connect to the database<br>");
}
$sql_delete = ("delete from user_contact where user_id = '101'");

$resutl = mysqli_query($conn, $sql_delete);
if ($resutl)
{
    echo "Records Deleted: $resutl<br>";
}
else
{
    echo "RECORDS NOT FOUND IN THE TABLE<br>";
    printf("Error message: %s<br>", mysqli_error($conn));
}
?>