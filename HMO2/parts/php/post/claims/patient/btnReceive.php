<?php

$id = $_POST['id'];
$status = "Received";


mysqli_query($con,"UPDATE tblpatientclaim SET status = '$status' WHERE reimbursementID = '$id'");


?>
<script>
alertify.alert("Received Successfully !");
setTimeout(function(){
window.location = 'coordinator-claims-patient.php';
}, 1500);
</script>
