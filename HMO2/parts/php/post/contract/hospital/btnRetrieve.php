<?php

$id = $_POST['id'];
$status = "Active";

mysqli_query($con,"UPDATE tblhospitalmaintenance SET status = '$status' WHERE hospitalMainID = '$id'");


?>
