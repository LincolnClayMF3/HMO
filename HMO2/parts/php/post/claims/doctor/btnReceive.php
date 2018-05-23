<?php

$id = $_POST['id'];
$status = "Received";


mysqli_query($con,"UPDATE tbldoctorclaim SET status = '$status' WHERE claimID = '$id'");


?>
<script>
alertify.alert("Received Successfully !");
setTimeout(function(){
window.location = 'coordinator-claims-doctor.php';
}, 1500);
</script>
