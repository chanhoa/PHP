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
$sql_update = ("update user_contact set user_name = 'David' where user_id = '102'");
$resutl = mysqli_query($conn, $sql_update);
if ($resutl)
{
    echo "RECORDS UPDATED: $resutl<br>";
}
else
{
    echo "UNABLE TO UPDATE RECORDS<BR>";
    printf("Error message: %s<br>", mysqli_error($conn));
}
?>