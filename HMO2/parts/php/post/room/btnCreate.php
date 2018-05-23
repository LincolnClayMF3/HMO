<?php

require 'parts/php/connection.php';

$type = $_POST['roomType'];
$desc = $_POST['roomDesc'];
$amount = $_POST['roomAmount'];
$amount = floatval(preg_replace('/[^\d.]/', '', $amount));
$status = $_POST['status'];

$check = mysqli_query($con, "SELECT COUNT(*) FROM tblroom WHERE roomType = '$type' AND
         roomAmount = '$amount' AND roomDesc = '$desc' AND status = '$status'");
$r = mysqli_fetch_row($check);

if($r[0] == 0){
mysqli_query($con, "INSERT INTO tblroom VALUES('','$type','$desc','$amount','$status')");


?>
<script>
alertify.alert("Created Successfully !");
</script>
<?php
}

else {
?>
<script>
alertify.alert("The Room is already Existing ! Please Try Again");
$("#newRoom").modal({"backdrop":"static"});
</script>
<?php
}
?>
