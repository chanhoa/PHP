<?php
$sever = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($sever, $username, $password);
if ($conn)
{
    echo "Connection established.";
}
else
{
    die("Unable to connect");
}
$db = "publications";
$mysql_db = mysqli_select_db($conn, $db);

if ($mysql_db)
{
    echo "<br><br>Connected to the database.";
}
else
{
    die("<br><br>Unable to connect to the database");
}
$sql_insert = "INSERT INTO user_contact(user_id, user_name, user_email_id)
                values ('101', 'John', 'john@email.com'),
                ('102', 'Jerry', 'jery@abc.com'),
                ('103', 'Dexter', 'dexter@abc.com')";
$resutl = mysqli_query($conn, $sql_insert);
if ($resutl)
{
    echo "<br><br>The records have been added to the table.";
}
else
{
    echo "<br><br>Unable to insert records";
    mysqli_error();
}
?>