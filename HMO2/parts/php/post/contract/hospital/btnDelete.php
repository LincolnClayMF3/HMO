<?php

$id = $_POST['id'];
$status = "Inactive";
$terminator = $_POST['terminator'];
$reason = $_POST['reason'];
$date = $_POST['terminationDate'];

mysqli_query($con,"UPDATE tblhospitalmaintenance SET status = '$status',
            hospitalEndContract = 'Terminated', hospitalMainReason = '$reason',
            hospitalMainTerminator = '$terminator', hospitalDateTerminated = '$date'
            WHERE hospitalMainID = '$id'");


?>

<script>
alertify.alert("Terminated Successfully !");
setTimeout(function(){
window.location = 'transaction-contract-hospital.php';
}, 1500);
</script>
