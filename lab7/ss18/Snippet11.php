
<html>
<body>
<?php
$sever = "";
$username = "root";
$password = "";
$conn = mysqli_connect($sever, $username, $password);
if ($conn)
    echo "Connection established";
$mysql_db = mysqli_select_db($conn, 'publications');

if ($mysql_db)
    echo "<br><br>Connected to the database<br><br>";
echo "<table border bgcolor='white'>";
echo "<tr>
        <th>USER_ID</th>
        <th>USER_NAME</th>
        <th>USER_EMAIL_ID</th>";
echo "<dbquery q> select * from user_contact";
echo "<dbrow>
        <tr>
            <td><? q.user_id></td>
            <td><? q.user_name></td>
            <td><? q.user_email_id></td>
        </tr>";
echo "</dbquery>";
echo "</tr>";
echo "</table>";
?>
</body>
</html>