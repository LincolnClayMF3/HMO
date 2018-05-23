<?php

$id = $_POST['id'];
$status = "Active";
$endContract = $_POST['newEndContract'];
$terminator = "None";
$reason = "None";
$terminationDate = "0000-00-00";
$plan = $_POST['planArray'];


  mysqli_query($con,"UPDATE tblcompanymaintenance SET status = '$status', companyMainReason = '$reason', companyDateTerminated = '$terminationDate',
    companyEndContract = '$endContract', companyMainTerminator = '$terminator' WHERE companyMainID = '$id'");

    mysqli_query($con,"DELETE FROM tblcompanyplan WHERE intCompanyID = '$id'");

    foreach ($plan as $p) {
      mysqli_query($con, "INSERT INTO tblcompanyplan (intCompanyID,intPlanID) VALUES('$id','$p')");
    }
?>
<script>
alertify.alert("Renewed Successfully !");
setTimeout(function(){
  window.location = 'transaction-contract-company.php';
}, 1500);
</script>
