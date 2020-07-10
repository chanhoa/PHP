<?php
$sever = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($sever, $username, $password, 'publications');
if ($conn)
{
    echo "Connection established<br>";
}else
{
    die("Unable to connect<br>");
}
$mysql_db = mysqli_select_db($conn, 'publications');
if ($mysql_db)
{
    echo "Connected to the database<br>";
}
else{
    die("Unable to connect to the database<br>");
}
$sql_table = "create table user_contact(
                                        user_id INT NOT NULL PRIMARY KEY,
                                        user_name CHAR(25) NOT NULL,
                                        user_email_id CHAR(25)
                                        )";
if (mysqli_query($conn, $sql_table))
{
    echo "Table is created<br>";
}
else
{
    die("Unable to create the table<br>");
}
?>