<?php

$id = $_POST['id'];
$status = "Disbursed";

mysqli_query($con,"UPDATE tbldoctorclaim SET status = '$status' WHERE claimID = '$id'");


?>

<script>
alertify.alert("Disbursed Successfully !");
setTimeout(function(){
window.location = 'transaction-claims-doctor.php';
}, 1500);
</script>
