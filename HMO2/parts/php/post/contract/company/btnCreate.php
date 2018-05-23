<?php

$name = $_POST['companyName'];
$address = $_POST['companyAddress'];
$type = "Corporate";
$plan = $_POST['planArray'];
$telephone = $_POST['companyTelephone'];
$mobile = $_POST['companyMobile'];
$email = $_POST['companyEmail'];
$entry = date('Y-m-d');
$end = $_POST['contract'];
$status = $_POST['status'];
$reason = "None";
$terminator = "None";
$date = "0000-00-00";


$sql = mysqli_query($con, "SELECT companyMainID FROM tblcompanymaintenance ORDER BY companyMainID DESC LIMIT 1;");

$num = mysqli_num_rows($sql);

if( $num > 0){
  while ($row = mysqli_fetch_array($sql)) {
    $id = (int) $row['companyMainID'];
  }
  $id++;
}else{
  $id = 1;
}

$check = mysqli_query($con, "SELECT COUNT(*) FROM tblcompanymaintenance WHERE companyMainName = '$name'
         AND status != 'Inactive'");
$r = mysqli_fetch_row($check);

if($r[0] == 0){
mysqli_query($con, "INSERT INTO tblcompanymaintenance VALUES('$id','$name','$type','$address',
      '$telephone','$mobile','$email','$entry','$end','','$reason','$terminator','$date','$status')");

foreach ($plan as $p) {
  mysqli_query($con, "INSERT INTO tblcompanyplan (intCompanyID, intPlanID) VALUES('$id','$p')");
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
alertify.alert("The Company is already Existing ! Please Try Again");
$("#newCompany").modal({"backdrop":"static"});
</script>
<?php
}
?>
