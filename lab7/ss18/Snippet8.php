<?php
$sever = "localhost";
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
$sql_disp = ("select * from user_contact");
echo "<br>Displaying Records from the USER_CONTACT table:<br>";
$resutl = mysqli_query($conn, $sql_disp);
while ($row = mysqli_fetch_array($resutl))
{
    echo "$row[user_id] $row[user_name] $row[user_email_id]<br>";
}
?>