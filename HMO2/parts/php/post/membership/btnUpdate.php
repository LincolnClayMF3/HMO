<?php

$id = $_POST['id'];
$name = $_POST['membershipName'];
$percentage = $_POST['membershipPercentage'];
$desc = $_POST['membershipDesc'];
$status = $_POST['status'];


$check = mysqli_query($con, "SELECT COUNT(*) FROM tblmembershiptype WHERE membershipName = '$name' AND membershipPercentage = '$percentage'
                             AND membershipDesc = '$desc'");
$r = mysqli_fetch_row($check);

if($r[0] == 0){
mysqli_query($con,"UPDATE tblmembershiptype SET  membershipName = '$name', membershipPercentage = '$percentage', membershipDesc = '$desc', status = '$status'
                   WHERE membershipID = '$id'");

// echo "<meta http-equiv='refresh' content='0'>";
?>
<script>
alertify.alert("Edited Successfully !");
setTimeout(function(){
window.location = 'maintenance-membership.php';
}, 1500);
</script>
<?php
}

else {
?>
<script>
alertify.alert("No Changes were made");
</script>
<?php
}
?>
