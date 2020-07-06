<?php
require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_errno)die("Fatal Error");
if (
    isset($_POST['username'])
    && isset($_POST['password'])
    && isset($_POST['email'])
    && isset($_POST['phone'])
    && isset($_POST['fullname'])
)
{
    $username = get_post($conn, 'username');
    $password = get_post($conn, 'password');
    $email = get_post($conn, 'email');
    $phone = get_post($conn, 'phone');
    $fullname = get_post($conn, 'fullname');
    $query = "insert into usertable(username,password,email,fullname) 
     values ('$username', '$password', '$email', '$fullname')";

    if (mysqli_num_rows(mysqli_query($conn, "select username from usertable where username = '" . $username . "'")) > 0) {
        echo "Account already exists! <a href='javascript: history.go(-1)'>Back</a>";
        exit;
    }
    $result = $conn->query($query);
    header('location: signin-Usertable.php');
}

echo <<<_END
<form action="singup-UserTable.php" method="post">
<pre>
User Name <input type="text" name="username" required>
Password <input type="password" name="password" required>
Email <input type="text" name="email" required>
Phone <input type="text" name="phone" required>
FullName <input type="text" name="fullname" required>
<input type="submit" value="SignUp">
</pre>
</form>
_END;

$conn->close();

function get_post($conn, $var)
{
    return $conn->real_escape_string($_POST[$var]);
}
?>