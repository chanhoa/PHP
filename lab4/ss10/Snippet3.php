<?php
$sa1 = $_GET['sa1'];
echo "Salary before bonus : $";
echo $sa1;
echo "<br>";
if ($sa1 > 850) {
    $bonus = $sa1 *.1;
    echo "Bonus : $bonus";
    echo "<br>";
    $sa1 = $sa1 + $$bonus;
    echo "Total Salary : $$sa1";
}
?>