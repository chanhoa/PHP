<html>
<head>
    <titte>Employee Details</titte>

</head>
<body>
<h4>Enter your datails </h4>
<FROM METHOD=POST ACTION = "EMP_DETAILS.php">
    <TABLE>
        <TR>
            <TD>Employee</TD>
            <TD><INPUT TYPE="text" NAME="empid"></TD>
        </TR>
        <TR>
            <TD>Name</TD>
            <TD><INPUT TYPE ="text" NAME="Name"></TD>
        </TR>
        <TR>
            <TD>Department</TD>
            <TD>
                <INPUT TYPE="radio" name="dept" value="Finance">Finance
                <INPUT TYPE="radio" name="dept" value="Marketing">Marketing
                <INPUT TYPE="radio" name="dept" value="IT">IT
            </TD>
        </TR>
        <TR>
            <TD>Email</TD>
            <TD><INPUT TYPE="text" name="email"></TD>
        </TR>
    </TABLE>
    <br>
    <TD><INPUT TYPE="submit" value="submit"></TD>
</FROM>
</body>
</html>
