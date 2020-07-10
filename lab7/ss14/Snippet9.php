<?php
function Square(&$a)
{
    $a = $a * $a;
    echo $a;
}
$a = 5;
echo "The square of $a is: ";
Square($a);

function multiplication(&$a, &$b)
{
    $c = $a * $b;
    echo "<br><br>The multiplication of $a and $b is: $c";
}
$a = 25;
$b = 30;
multiplication($a, $b);
?>
