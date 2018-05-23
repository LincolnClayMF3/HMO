<?php

$id = $_POST['id'];
$status = "Active";

mysqli_query($con,"UPDATE tblcompanymaintenance SET status = '$status' WHERE companyMainID = '$id'");

?>
