<?php
$student = array(
    001 => array(
        "Name" => "Chris Edwards",
        "Email" => "chris.e@flaymore.edu",
        "Grade" => "A",
        "Gender" => "Male"
    ),
    002 => array(
        "Name" => "Martina Lake",
        "Email" => "martina.l@flaymore.edu",
        "Grade" => "A+",
        "Gender" => "Female"
    ),
    003 => array(
        "Name" => "Luce Grace",
        "Email" => "luce.g@flaymore.edu",
        "Grade" => "B",
        "Gender" => "Female"
    ),
    004 => array(
        "Name" => "Jack Thompson",
        "Email" => "jack.t@flaymore.edu",
        "Grade" => "B+",
        "Gender" => "Male"
    )
);
$total_elmt = count($student);
for ($i = 0; $i < $total_elmt; $i++)
{
    $row = each($student);
    $val = $row['key'];
    echo "00$val: <br>";
    $valcount = count($student[$val]);
    for ($t = 0; $t < $valcount; $t++)
    {
        $rec = each($student[$val]);
        echo "$rec[key] $rec[value]<br>";
    }
    echo "<br>";
}
?>