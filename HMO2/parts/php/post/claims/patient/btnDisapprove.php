<?php

$id = $_POST['id'];
$status = "Disapproved";
$reason = $_POST['reason'];
$period = $_POST['gracePeriod'];

mysqli_query($con,"UPDATE tblpatientclaim SET status = '$status', reimbursementDisapproved = '$reason', reimbursementGracePeriod = '$period' WHERE reimbursementID = '$id'");

?>

<script>
alertify.alert("Disapproved Successfully !");
setTimeout(function(){
window.location = 'transaction-claims-patient.php';
}, 1500);
</script>
