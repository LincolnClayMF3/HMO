<?php

$id = $_POST['id'];
$status = "Approved";

mysqli_query($con,"UPDATE tbldoctorclaim SET status = '$status' WHERE claimID = '$id'");


?>

<script>
alertify.alert("Approved Successfully !");
setTimeout(function(){
window.location = 'transaction-claims-doctor.php';
}, 1500);
</script>
