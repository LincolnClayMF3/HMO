<?php

$id = $_POST['id'];
$status = "Inactive";

mysqli_query($con,"UPDATE tblmembershiptype SET status = '$status' WHERE membershipID = '$id'");

?>
<script>
alertify.alert("Deleted Successfully !");
setTimeout(function(){
window.location = 'maintenance-membership.php';
}, 1500);
</script>
<?php

?>
