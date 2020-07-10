<?php
$a = $_GET['num1text'];
function DA(&$a)
{
    $b = 0.1 * $a;
    echo "<br>Your salary is $a USD";
    echo "<br>Dearness Allowance is $b USD";
}
DA($a);
?>