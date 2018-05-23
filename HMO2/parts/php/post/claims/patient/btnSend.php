<?php

require 'parts/php/connection.php';

  $name = $_POST['patientName'];
  $patient_explode = explode("|", $name);
  $patientVal = $patient_explode[1];
  $contact = $_POST['contactNumber'];
  $hospital = $_POST['hospitalName'];
  $coordinator = $_POST['hospitalCoordinator'];
  $card = $_POST['cardNumber'];
  $amount = $_POST['amountClaims'];
  $amount = floatval(preg_replace('/[^\d.]/', '', $amount));
  $reason = $_POST['reason'];
  $current = date('Y-m-d');
  $date = $current;
  $treatment = $_POST['treatmentDate'];
  $status = "Pending";
  $reasonDisapproved = "None";
  $gracePeriod = "None";
  $noreq = $_POST['numofreq'];

  $arr2 = array();

  $requirement = mysqli_query($con, "SELECT * FROM tblrequirement WHERE requirementType = 'Patient Claim'");

  while($row = mysqli_fetch_array($requirement)){
    $id = $row['requirementID'];
    $filereqname = $row['requirementName'];

    $arr2[] = $filereqname;
    $filereqname2 = implode("|",(array)$arr2);

}

  $arr = array();
  $ctr1 = 1;
  while ($ctr1 <= $noreq){
  $fileExistsFlag = 0;
  $fileName = $_FILES['requirementFile']['name'][$ctr1];

  $link = mysqli_connect("localhost","root","","dbhmo") or die("Error ".mysqli_error($link));

  $query = "SELECT reimbursementreqName FROM tblpatientclaim WHERE reimbursementreqName='$fileName'";
  $output = $link->query($query) or die("Error : ".mysqli_error($link));
  while($row = mysqli_fetch_array($output)) {
  if($row['reimbursementreqName'] == $fileName) {
  $fileExistsFlag = 1;
  }
  }
  /*
  * 	If file is not present in the destination folder
  */
  if($fileExistsFlag == 0) {
  $target = "uploads/patient/";
  $fileTarget = $target.$fileName;

  $arr[] = $fileTarget;
    $filepath = implode("|",(array)$arr);

  $tempFileName = $_FILES['requirementFile']["tmp_name"][$ctr1];
  $movefile = move_uploaded_file($tempFileName,$fileTarget);
  /*
  *	If file was successfully uploaded in the destination folder
  */
  if($movefile) {
      $sql = mysqli_query($con, "SELECT reimbursementID FROM tblpatientclaim ORDER BY reimbursementID DESC LIMIT 1;");

      $num = mysqli_num_rows($sql);

      if( $num > 0){
        while ($row = mysqli_fetch_array($sql)) {
          $id = (int) $row['reimbursementID'];
        }
        $id++;
      }else{
        $id = 1;
      }

      ?>
      <script>
      alertify.alert("Claim Sent Successfully !");
      </script>
    <?php
  }
  else {
   ?><script>
     alertify.alert("Sorry !!! There was an error in uploading your file");

   </script><?php
  }
  mysqli_close($link);
  }
  /*
  * 	If file is already present in the destination folder
  */
  else {
    ?><script>
      alertify.alert('Files Exist. No Changes Made.');
    </script><?php
  mysqli_close($link);
  }
  $ctr1++;
}


mysqli_query($con, "INSERT INTO tblpatientclaim(reimbursementID, reimbursementPatientName, reimbursementCardID, reimbursementContact, reimbursementTreatment, reimbursementCoordinator, reimbursementHospital, reimbursementReason, reimbursementAmount, reimbursementDate, status, reimbursementDisapproved, reimbursementGracePeriod, reimbursementreqName, reimbursementreqPath) VALUES('$id','$patientVal','$card','$contact','$treatment','$coordinator','$hospital','$reason','$amount','$date','$status','$reasonDisapproved','$gracePeriod','$filereqname2','$filepath')");





  ?>
