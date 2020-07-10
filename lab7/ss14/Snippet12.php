<?php
function HRA($basic_sal)
{
    $HRA = 0.25 * $basic_sal;
    return $HRA;
}
$b = HRA(20000);
echo "The HRA is: ".$b;
?>