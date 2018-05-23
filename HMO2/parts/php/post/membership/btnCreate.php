<?php

$name = $_POST['membershipName'];
$desc = $_POST['membershipDesc'];
$percentage = $_POST['membershipPercentage'];
$status = $_POST['status'];

$check = mysqli_query($con, "SELECT COUNT(*) FROM tblmembershiptype WHERE membershipName = '$name'");
$r = mysqli_fetch_row($check);

if($r[0] == 0){
mysqli_query($con, "INSERT INTO tblmembershiptype VALUES('','$name','$percentage','$desc','$status')");

?>
<script>
alertify.alert("Created Successfully !");
</script>
<?php
}

else {
?>
<script>
alertify.alert("The Membership Type is already Existing ! Please Try Again");
$("#newMembership").modal({"backdrop":"static"});
</script>
<?php
}

?>
