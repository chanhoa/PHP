<?php
$basic_sal = 75000;
function HRA($basic_sal)
{
    $HRA = 3/10 * $basic_sal;
    echo "Your HRA is: ";
    echo $HRA."<br>";
}
function TA($basic_sal)
{
    $TA = 1/4 * $basic_sal;
    echo "Your TA is: ";
    echo $TA."<br>";
}
function TAX($basic_sal)
{
    $TAX = 1/10 * $basic_sal;
    echo "Your TAX is: ";
    echo $TAX."<br>";
}
function Net_Salary($basic_sal)
{
    $a = 3/10 * $basic_sal;
    $b = 1/4 * $basic_sal;
    $c = 1/10 * $basic_sal;
    $Net_sal = 75000 + $a + $b - $c;
    echo "Your Net Salary is: ".$Net_sal;
}
HRA($basic_sal)."<br>";
TA($basic_sal)."<br>";
TAX($basic_sal)."<br>";
Net_Salary($basic_sal)."<br>";
?>