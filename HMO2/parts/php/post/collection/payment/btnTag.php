<?php

$id = $_POST['id'];
$balance = $_POST['memberTotalBalance'];
$amount = $_POST['memberPaid'];
$name = $_POST['memberName'];
$plan = $_POST['memberPlan'];
$date = $_POST['memberDate'];
$mode = $_POST['memberMode'];


mysqli_query($con, "UPDATE tblmembertransaction SET memberBalance = '$balance'
                    WHERE memberTransID = '$id'");

mysqli_query($con, "INSERT INTO tblpaymenthistory VALUES('','$date','$name','$plan','$mode','$amount','$balance')");

echo "<meta http-equiv='refresh' content='0'>";

?>
