<?php

$id = $_POST['id'];
$status = "Inactive";

mysqli_query($con,"UPDATE tblrequirement SET status = '$status' WHERE requirementID = '$id'");

?>
<script>
alertify.alert("Deleted Successfully !");
setTimeout(function(){
window.location = 'maintenance-requirement.php';
}, 1500);
</script>
<?php

?>
