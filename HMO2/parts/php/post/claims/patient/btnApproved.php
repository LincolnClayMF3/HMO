<?php

$id = $_POST['id'];
$status = "Approved";

mysqli_query($con,"UPDATE tblpatientclaim SET status = '$status' WHERE reimbursementID = '$id'");

?>

<script>
alertify.alert("Approved Successfully !");
setTimeout(function(){
window.location = 'transaction-claims-patient.php';
}, 1500);
</script>
