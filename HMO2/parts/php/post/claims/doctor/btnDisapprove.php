<?php

$id = $_POST['id'];
$status = "Disapproved";
$reason = $_POST['reason'];
$period = $_POST['gracePeriod'];


mysqli_query($con,"UPDATE tbldoctorclaim SET status = '$status', claimReason = '$reason', claimGracePeriod = '$period' WHERE claimID = '$id'");

?>

<script>
alertify.alert("Disapproved Successfully !");
setTimeout(function(){
window.location = 'transaction-claims-doctor.php';
}, 1500);
</script>
