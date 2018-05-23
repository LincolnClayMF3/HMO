<?php

$id = $_POST['id'];
$name = $_POST['planName'];
$limit = $_POST['planMaximum'];
$limit = floatval(preg_replace('/[^\d.]/', '', $limit));
$membership = $_POST['membership'];
$annual = $_POST['planAnnual'];
$annual = floatval(preg_replace('/[^\d.]/', '', $annual));
$standard = $_POST['standard'];
$status = $_POST['status'];
$hospital = $_POST['hospital'];
$pid = $_POST['pid'];

// $check = mysqli_query($con, "SELECT COUNT(*) FROM tblplan  WHERE planName = '$name'
//          AND planAnnualPayment = '$annual' AND status = 'Active'");
// $r = mysqli_fetch_row($check);

// if($r[0] == 0){
mysqli_query($con,"UPDATE tblplan SET planName = '$name', planAnnualPayment = '$annual', status = '$status' WHERE planID = '$id'");

mysqli_query($con,"DELETE FROM tblplanstandard WHERE intPlanID = '$id'");
mysqli_query($con,"DELETE FROM tblplanamountlimit WHERE intPlanID = '$id'");
mysqli_query($con,"DELETE FROM tblplantype WHERE intPlanID = '$id'");
mysqli_query($con,"DELETE FROM tblplanhospitaltype WHERE intPlanID = '$id'");

mysqli_query($con,"UPDATE tblplanlimit SET planAmountLimit = '$limit' WHERE planLimitID = '$pid'");
mysqli_query($con, "INSERT INTO tblplanamountlimit (intPlanID,intPlanLimitID) VALUES('$id','$pid')");

foreach ($membership as $member) {
  mysqli_query($con, "INSERT INTO tblplantype (intPlanID,intTypeID) VALUES('$id','$member')");
}

foreach ($standard as $stnd) {
  mysqli_query($con, "INSERT INTO tblplanstandard (intPlanID,intStandardID) VALUES('$id','$stnd')");
}

foreach ($hospital as $hid) {
  mysqli_query($con, "INSERT INTO tblplanhospitaltype (intPlanID,intHospitalTypeID) VALUES('$id','$hid')");
}

if(!empty($_POST['addon'])){
  $additional = $_POST['addon'];
  mysqli_query($con,"DELETE FROM tblplanadditional WHERE intPlanID = '$id'");
  foreach ($additional as $add) {
    mysqli_query($con, "INSERT INTO tblplanadditional (intPlanID,intAdditionalID) VALUES('$id','$add')");
  }
}

if(!empty($_POST['pec'])){
  $pec = $_POST['pec'];
  mysqli_query($con,"DELETE FROM tblplanpec WHERE intPlanID = '$id'");
  foreach ($pec as $pre) {
    mysqli_query($con, "INSERT INTO tblplanpec (intPlanID,intPECID) VALUES('$id','$pre')");
  }
}


// echo "<meta http-equiv='refresh' content='0'>";

?>
<script>
alertify.alert("Edited Successfully !");
setTimeout(function(){
window.location = 'maintenance-plan.php';
}, 3000);
</script>
<?php
// }

// else {
?>
<!-- <script>
alertify.alert("No Changes were made");
</script> -->
<?php
// }
?>
