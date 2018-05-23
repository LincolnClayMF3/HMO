<?php

$id = $_POST['id'];
$status = "Inactive";
$reason = $_POST['reason'];
$terminator = $_POST['terminator'];
$date = $_POST['terminationDate'];

mysqli_query($con,"UPDATE tblmembertransaction SET status = '$status', memberTransReason = '$reason',
      memberTransTerminator = '$terminator', memberDateTerminated = '$date' WHERE memberTransID = '$id'");

echo "<meta http-equiv='refresh' content='0'>";

?>
