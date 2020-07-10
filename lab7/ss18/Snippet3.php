<?php
$conn = mysqli_connect('localhost', 'root', '', 'publications');
if ($resutl = mysqli_query($conn, "SELECT * FROM customer"))
{
    $rows = mysqli_num_rows($resutl);
    echo "The table contains $rows rows<br>";
}
?>