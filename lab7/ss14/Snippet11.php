<?php
function T_ALLOWANCE($basic_sal = 100000)
{
    $T_ALLOWANCE = 0.25 * $basic_sal;
    echo "The travel allowance is: $T_ALLOWANCE";
}
T_ALLOWANCE();
?>