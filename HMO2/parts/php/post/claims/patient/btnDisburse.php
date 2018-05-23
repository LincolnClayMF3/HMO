<?php

$id = $_POST['id'];
$status = "Disbursed";

mysqli_query($con,"UPDATE tblpatientclaim SET status = '$status' WHERE reimbursementID = '$id'");


?>

<script>
alertify.alert("Disbursed Successfully !");
setTimeout(function(){
window.location = 'transaction-claims-patient.php';
}, 1500);
</script>
