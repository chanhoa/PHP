<?php
require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_errno)die("Fatal Error");
if (
    isset($_POST['username'])
    && isset($_POST['password'])
) {
    //Lấy dữ liệu nhập vào
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($conn, "select username, password from usertable where username = '".$username."' and password = '".$password."'");
    if (mysqli_num_rows($query) == 0){
        //Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
        if ($username == null || $password == null){
            echo "Please enter username and password! <a href='javascript: history.go(-1)'>Back</a>";
            exit;
        }
        echo "Username or password is incorrect, please try again!<a href='javascript: history.go(-1)'>Back</a>";
        exit;
    }

    //Lưu tên đăng nhập
    $_SESSION['username'] = $username;
    echo "Hello $username.<br> Welcome!";
    die();
}
echo <<<_END
<form action="signin-Usertable.php" method="post">
<pre>
User Name <input type="text" name="username">
Password <input type="password" name="password">
<input type="submit" value="LogIn">
</pre>
</form>
_END;
?>