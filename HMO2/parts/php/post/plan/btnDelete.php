<?php

$id = $_POST['id'];
$status = "Inactive";

mysqli_query($con,"UPDATE tblplan SET status = '$status' WHERE planID = '$id'");

?>
<script>
alertify.alert("Deleted Successfully !");
setTimeout(function(){
window.location = 'maintenance-plan.php';
}, 1500);
</script>
<?php

?>
