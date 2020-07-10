<?php
$ITdept = array(0 => 'Testing', 1 => 'Training');
$salesdept = array(0 => 'Advertising', 1 => 'Marketing');
$no_of_element = count($ITdept);
for ($i = 0; $i < $no_of_element; $i++)
{
    $rec = each($ITdept);
    echo "$rec[key] $rec[value]<br>";
}
echo "<br>";
$num_of_element = count($salesdept);
for ($i = 0; $i < $num_of_element; $i++)
{
    $rec = each($salesdept);
    echo "$rec[key] $rec[value]<br>";
}
echo "<br>";
$adminDept = array_merge($ITdept, $salesdept);
$num1_of_element = count($adminDept);
for ($i = 0; $i < $num1_of_element; $i++)
{
    $rec = each($adminDept);
    echo "$rec[key] $rec[value]<br>";
}
echo "<br>";
$adminDept = array_merge($salesdept, $ITdept);
$num2_of_element = count($adminDept);
for ($i = 0; $i < $num2_of_element; $i++)
{
    $rec = each($adminDept);
    echo "$rec[key] $rec[value]<br>";
}
echo "<br>";
?>