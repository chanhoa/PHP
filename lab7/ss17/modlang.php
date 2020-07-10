<?php
$lang = array(1 => "VB", 2 => "Java", 3 => "PHP", 4 => "Delphi");
$total_elmt = count($lang);
echo "Original array: <br>";
for ($i = 0; $i < $total_elmt; $i++){
    $rec = each($lang);
    echo "$rec[key] $rec[value]<br>";
}
echo "<br>";
sort($lang);
$total_elmt = count($lang);
echo "Modified array: <br>";
for ($i = 0; $i < $total_elmt; $i++)
{
    $rec = each($lang);
    echo "$rec[key] $rec[value]<br>";
}
?>