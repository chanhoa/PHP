<?php
$severOS = array(0 => "Windows NT", 1 => "Windows 2000", "Windows 2003");

$applicationOS = array(1 => "Windows 95", 2 => "Windows 98", 3 => "Windows ME");
$sever_count = count($severOS);
echo "Sever Operating systems<br>";
for ($i = 0; $i < $sever_count; $i++)
{
    $rec = each($severOS);
    echo "$rec[key] $rec[value]<br>";
}
echo '<br>';
echo "Application Operating systems<br>";
$app_count = count($applicationOS);
for ($i = 0; $i < $app_count; $i++)
{
    $rec = each($applicationOS);
    echo "$rec[key] $rec[value]<br>";
}
$OptSys = array_merge($severOS, $applicationOS);

echo "<br>";
echo "Merged array of Operating systems<br>";
$total = count($OptSys);
for ($i = 0; $i < $total; $i++)
{
    $rec = each($OptSys);
    echo "$rec[key] $rec[value]<br>";
}
?>