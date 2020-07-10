<?php
function increment(&$num, $increment = 1)
{
    $num += $increment;
    echo $num.'<br>';
}
$num = 4;
increment($num);
increment($num, 3);
?>