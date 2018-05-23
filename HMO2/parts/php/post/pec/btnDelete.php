<?php

$id = $_POST['id'];
$status = "Inactive";

mysqli_query($con,"UPDATE tblpec SET status = '$status' WHERE pecID = '$id'");

?>
<script>
alertify.alert("Deleted Successfully !");
setTimeout(function(){
window.location = 'maintenance-pec.php';
}, 1500);
</script>
<?php
?>
