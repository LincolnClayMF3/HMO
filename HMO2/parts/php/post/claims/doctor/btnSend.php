<?php

require 'parts/php/connection.php';

  $dname = $_POST['doctorName'];
  $phone = $_POST['phoneNumber'];
  $hospital = $_POST['hospitalName'];
  $date = date('Y-m-d');
  $address = $_POST['hospitalAddress'];
  $coordinator = $_POST['hospitalCoordinator'];
  $status = "Pending";
  $names = count($_POST["patientName"]);
  $services = count($_POST["claimServices"]);
  $amounts = count($_POST["claimAmount"]);
  $reason = "None";
  $gracePeriod = "None";

  $sql = mysqli_query($con, "SELECT claimID FROM tbldoctorclaim ORDER BY claimID DESC LIMIT 1;");

  $num = mysqli_num_rows($sql);

  if( $num > 0){
    while ($row = mysqli_fetch_array($sql)) {
      $id = (int) $row['claimID'];
    }
    $id++;
  }else{
    $id = 1;
  }

  mysqli_query($con, "INSERT INTO tbldoctorclaim VALUES('$id','$dname','$phone','$hospital','$address','$coordinator','$date','$status','$reason','$gracePeriod')");


if($names >= 1 && $services >= 1 && $amounts >=1){
  for ($n=0, $s=0, $a=0; $n < $names, $s < $services, $a < $amounts; $n++, $s++, $a++) {
    if (trim($_POST["patientName"][$n]) != '' && trim($_POST["claimServices"][$s]) != '' && trim($_POST["claimAmount"][$a]) != '') {
      $insert = "INSERT INTO tbldoctorpatient(patientName,patientServices,patientAmount) VALUES('".mysqli_escape_string($con, $_POST["patientName"][$n])."','".mysqli_escape_string($con, $_POST["claimServices"][$s])."','".mysqli_escape_string($con, $_POST["claimAmount"][$a])."')";
      mysqli_query($con, $insert);

      $sql2 = mysqli_query($con, "SELECT patientID FROM tbldoctorpatient ORDER BY patientID DESC LIMIT 1;");

      $arrayPatientID = array();
      while ($r = mysqli_fetch_array($sql2)) {
        $arrayPatientID[] = $r['patientID'];
      }

      foreach ($arrayPatientID as $pid) {
        mysqli_query($con, "INSERT INTO tbldoctorpatientclaim (intClaimID, intPatientID) VALUES('$id', '$pid')");
      }
    }
  }
}

?>
<script>
alertify.alert("Claim Sent Successfully !");
</script>
<?php

?>
