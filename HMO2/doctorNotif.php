<?php

require 'parts/php/connection.php';

$sql = "SELECT * FROM tbldoctorclaim WHERE status = 'Pending'";
$result = $con->query($sql);
$row = $result->fetch_assoc();
$count = $result->num_rows;
echo $count;

$con->close();

?>
