<html>
<head>
    <title>Grade Details</title>
</head>
<body>
<?php
$myname = $_GET['myname'];
$mygrade = $_GET['mygrade'];
echo "<br>";

if ($myname=="")
{
    echo "Please enter your name";
}
else
{
    switch ($mygrade)
    {
        case "":
            echo $myname.", you did not enter your Grade!";
            break;
        case "A":
            echo "Facilities for $myname (Grade A) <br><br>";
            echo "Increment = 30% of basic salary <br>";
            echo "Bonus = 20% of basic salary <br>";
            echo "Traveling allowance = $500 <br>";
            echo "Medical allowance = $500 <br>";
            break;
        case "B":
            echo "Facilities for $myname (Grade B) <br><br>";
            echo "Increment = 20% of basic salary <br>";
            echo "Bonus = 10% of basic salary <br>";
            echo "Traveling allowance = $300 <br>";
            echo "Medical allowance = $300 <br>";
            break;
        case "C":
            echo "Facilities for $myname (Grade C) <br><br>";
            echo "Increment = 10% of basic salary <br>";
            echo "Bonus = 5% of basic salary <br>";
            echo "Traveling allowance = $100 <br>";
            echo "Medical allowance = $100 <br>";
            break;
        default:
            echo "$myname, Please enter the correct Grade(A, B, or C)";
            break;
    }
}
?>
<a href="perks.html">Back</a>
</body>
</html>
