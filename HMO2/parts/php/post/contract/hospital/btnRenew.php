<?php

$id = $_POST['id'];
$status = "Active";
$reason = "None";
$terminator = "None";
$terminationDate = "0000-00-00";
$endContract = $_POST['newEndContract'];

$check = mysqli_query($con, "SELECT COUNT(*) FROM tblhospitalmaintenance WHERE hospitalEndContract = '$endContract'");
$r = mysqli_fetch_row($check);

if($r[0] == 0){

  mysqli_query($con,"UPDATE tblhospitalmaintenance SET status = '$status', hospitalMainReason = '$reason', hospitalDateTerminated = '$terminationDate',
    hospitalMainTerminator = '$terminator', hospitalEndContract = '$endContract' WHERE hospitalMainID = '$id'");
    ?>

    <script>
    alertify.alert("Renewed Successfully !");
    setTimeout(function(){
    window.location = 'transaction-contract-hospital.php';
    }, 1500);
    </script>

    <?php

}
else {
  ?>

  <script>
  alertify.alert("NO Changes Were Made !");
  </script>

  <?php
}


?>
