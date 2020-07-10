<?php
$conn = mysqli_connect('localhost', 'root', '', 'publications');
$result = mysqli_query($conn, "select * from customer");
while ($row = mysqli_fetch_row($result)){
    printf("%s (%s)<br>", $row[0], $row[1]);
}
?>