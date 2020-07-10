<?php
$department[0] = "Finance";
$department[1] = "Sales";
$department[2] = "HR";
$department[3] = "Purchase";
$dept = array_reverse($department);
$no_of_element = count($department);
for ($i = 0; $i < $no_of_element; $i++)
{
    $rec = each($dept);
    echo "$rec[key] $rec[value]<br>";
}
?>