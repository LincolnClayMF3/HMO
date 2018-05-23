<?php

$name = $_POST['planName'];
// $room = $_POST['planRoom'];
$standard = $_POST['standard'];
// $years = $_POST['planDuration'];
$annual = $_POST['planAnnual'];
$annual = floatval(preg_replace('/[^\d.]/', '', $annual));
$hospital = $_POST['hospital'];
$membership = $_POST['membership'];
// $membership_explode = explode("|",$membership);
// $membershipID = $membership_explode[0];
$limit = $_POST['planMaximum'];
$limit = floatval(preg_replace('/[^\d.]/', '', $limit));
$status = $_POST['status'];

$check = mysqli_query($con, "SELECT COUNT(*) FROM tblplan WHERE planName = '$name'");
$r = mysqli_fetch_row($check);

if($r[0] == 0){
$sql = mysqli_query($con, "SELECT planID FROM tblplan ORDER BY planID DESC LIMIT 1;");

$num = mysqli_num_rows($sql);

if( $num > 0){
  while ($row = mysqli_fetch_array($sql)) {
    $id = (int) $row['planID'];
  }
  $id++;
}else{
  $id = 1;
}

$sql2 = mysqli_query($con, "SELECT planLimitID FROM tblplanlimit ORDER BY planLimitID DESC LIMIT 1;");

$num2 = mysqli_num_rows($sql2);

if( $num2 > 0){
  while ($row = mysqli_fetch_array($sql2)) {
    $pid = (int) $row['planLimitID'];
  }
  $pid++;
}else{
  $pid = 1;
}

mysqli_query($con, "INSERT INTO tblplan VALUES('$id','$name','$annual','$status')");
// mysqli_query($con, "INSERT INTO tblplanroom (intPlanID,intRoomID) VALUES('$id','$room')");
mysqli_query($con, "INSERT INTO tblplanlimit VALUES('$pid','$limit')");
mysqli_query($con, "INSERT INTO tblplanamountlimit (intPlanID,intPlanLimitID) VALUES('$id','$pid')");

foreach ($membership as $member) {
  mysqli_query($con, "INSERT INTO tblplantype (intPlanID,intTypeID) VALUES('$id','$member')");
}

foreach ($hospital as $hid) {
  mysqli_query($con, "INSERT INTO tblplanhospitaltype (intPlanID,intHospitalTypeID) VALUES('$id','$hid')");
}


  foreach ($standard as $stnd) {
    mysqli_query($con, "INSERT INTO tblplanstandard (intPlanID,intStandardID) VALUES('$id','$stnd')");
  }

  if(!empty($_POST['addon'])){
    $addon = $_POST['addon']; 
    foreach ($addon as $add) {
      mysqli_query($con, "INSERT INTO tblplanadditional (intPlanID,intAdditionalID) VALUES('$id','$add')");
    }
  }

if(!empty($_POST['pec'])){
  $pec = $_POST['pec'];
  foreach ($pec as $pre) {
    mysqli_query($con, "INSERT INTO tblplanpec (intPlanID,intPECID) VALUES('$id','$pre')");
  }
}

  ?>
  <script>
  alertify.alert("Created Successfully !");
  </script>
<?php
}

else {
?>
<script>
alertify.alert("The Plan is already Existing ! Please Try Again");
$("#newPlan").modal({"backdrop":"static"});
</script>
<?php
}
?>
