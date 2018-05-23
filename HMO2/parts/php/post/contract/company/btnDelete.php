<?php

$id = $_POST['id'];
$status = "Inactive";
$reason = $_POST['reason'];
$terminator = $_POST['terminator'];
$date = $_POST['terminationDate'];

mysqli_query($con,"UPDATE tblcompanymaintenance SET status = '$status',
  companyEndContract = 'Terminated', companyMainReason = '$reason',
  companyMainTerminator = '$terminator', companyDateTerminated = '$date'
  WHERE companyMainID = '$id'");

echo "<meta http-equiv='refresh' content='0'>";

?>
