<?php

require 'parts/php/connection.php';

if(!empty($_POST['memberCompany'])){
$name = $_POST['memberName'];
$age = $_POST['memberAge'];
$bday = $_POST['memberBday'];
$height = $_POST['memberHeight'];
$weight = $_POST['memberWeight'];
$civil = $_POST['memberCivil'];
$gender = $_POST['gender'];
$address = $_POST['memberAddress'];
$telephone = $_POST['memberTelephone'];
$mobile = $_POST['memberMobile'];
$email = $_POST['memberEmail'];
$occupation = $_POST['memberOccupation'];
$company = $_POST['memberCompany'];
$freq = "Annual";
$specs = "Principal";
$plan = $_POST['memberPlan'];
$reason = "None";
$terminator = "None";
$date = "0000-00-00";
$mode = "Salary Deduction";
$annual = $_POST['memberPlanAnnual'];
$annual = floatval(preg_replace('/[^\d.]/', '', $annual));
$amountToPay = $_POST['memberPlanAnnual'];
$amountToPay = floatval(preg_replace('/[^\d.]/', '', $amountToPay));
$membership = $_POST['memberType'];
$limit = $_POST['memberPlanAmount'];
$limit = floatval(preg_replace('/[^\d.]/', '', $limit));
$balance = $_POST['memberPlanAmount'];
$balance = floatval(preg_replace('/[^\d.]/', '', $balance));
$end = $_POST['memberEnd'];
$entry = date('Y-m-d');
$card = "1243281238";
// $names = count($_POST["dependentName"]);
// $bdays= count($_POST["dependentBday"]);
// $relations = count($_POST["dependentRelationship"]);
// $civils = count($_POST["dependentCivilStatus"]);
$status = $_POST['status'];

$sql = mysqli_query($con, "SELECT memberTransID FROM tblmembertransaction ORDER BY memberTransID DESC LIMIT 1;");

$num = mysqli_num_rows($sql);

if( $num > 0){
  while ($row = mysqli_fetch_array($sql)) {
    $id = (int) $row['memberTransID'];
  }
  $id++;
}else{
  $id = 1;
}

mysqli_query($con, "INSERT INTO tblmembertransaction VALUES('$id','$name','$bday','$age','$height','$weight','$gender','$civil','$address','$telephone',
             '$mobile','$email','$occupation','$specs','$limit','$annual','$freq','$amountToPay','$mode','$balance','$entry','$end',
             '$reason','$terminator','$date','$card','$status')");

mysqli_query($con, "INSERT INTO tblmemberplan (intMemberID,intPlanID) VALUES('$id','$plan')");
mysqli_query($con, "INSERT INTO tblmembercompany (intMemberID,intCompanyID) VALUES('$id','$company')");
mysqli_query($con, "INSERT INTO tblmembertype (intMemberID,intMembershipID) VALUES('$id','$membership')");


if(!empty($_POST['memberPEC'])){

  $pec = $_POST['memberPEC'];
  foreach ($pec as $p) {

    mysqli_query($con, "INSERT INTO tblmemberpec (intMemberID,intPECMemberID) VALUES('$id','$p')");
  }
}

if(!empty($_POST['dependentName']) && !empty($_POST['dependentBday']) && !empty($_POST['dependentCivilStatus']) && !empty($_POST['dependentCivilStatus'])){
  $names = count($_POST["dependentName"]);
  $bdays= count($_POST["dependentBday"]);
  $relations = count($_POST["dependentRelationship"]);
  $civils = count($_POST["dependentCivilStatus"]);

if($names >= 1 && $bdays >= 1 && $relations >=1 && $civils >= 1){
  for ($n=0, $b=0, $r=0, $c=0; $n < $names, $b < $bdays, $r < $relations, $c < $civils; $n++, $b++, $r++, $c++) {
    if (trim($_POST["dependentName"][$n]) != '' && trim($_POST["dependentBday"][$b]) != '' && trim($_POST["dependentRelationship"][$r]) != '' && trim($_POST["dependentCivilStatus"][$c]) != '') {
      $insert = "INSERT INTO tbldependents(dependentName,dependentBday,dependentRelationship,dependentCivilStatus) VALUES('".mysqli_escape_string($con, $_POST["dependentName"][$n])."','".mysqli_escape_string($con, $_POST["dependentBday"][$b])."','".mysqli_escape_string($con, $_POST["dependentRelationship"][$r])."','".mysqli_escape_string($con, $_POST["dependentCivilStatus"][$c])."')";
      mysqli_query($con, $insert);

      $sql2 = mysqli_query($con, "SELECT dependentID FROM tbldependents ORDER BY dependentID DESC LIMIT 1;");

      $arrayDependentID = array();
      while ($r = mysqli_fetch_array($sql2)) {
        $arrayDependentID[] = $r['dependentID'];
      }

      foreach ($arrayDependentID as $did) {
        mysqli_query($con, "INSERT INTO tblmemberdependents(intMemberID, intDependentID) VALUES('$id', '$did')");
      }
    }
  }
}
}
}
else {
  $name = $_POST['memberName'];
  $age = $_POST['memberAge'];
  $bday = $_POST['memberBday'];
  $height = $_POST['memberHeight'];
  $weight = $_POST['memberWeight'];
  $civil = $_POST['memberCivil'];
  $gender = $_POST['gender'];
  $address = $_POST['memberAddress'];
  $telephone = $_POST['memberTelephone'];
  $mobile = $_POST['memberMobile'];
  $email = $_POST['memberEmail'];
  $occupation = $_POST['memberOccupation'];
  $specs = "Principal";
  $plan = $_POST['memberPlan'];
  $freq = $_POST['memberFrequency'];
  $freq_explode = explode("|",$freq);
  $freqVal = $freq_explode[0];
  $mode = "Cash";
  $reason = "None";
  $terminator = "None";
  $date = "0000-00-00";
  $annual = $_POST['memberPlanAnnual'];
  $annual = floatval(preg_replace('/[^\d.]/', '', $annual));
  $amountToPay = $_POST['amountToPay'];
  $amountToPay = floatval(preg_replace('/[^\d.]/', '', $amountToPay));
  $membership = $_POST['memberType'];
  $limit = $_POST['memberPlanAmount'];
  $limit = floatval(preg_replace('/[^\d.]/', '', $limit));
  $balance = $_POST['memberPlanAmount'];
  $balance = floatval(preg_replace('/[^\d.]/', '', $balance));
  $end = $_POST['memberEnd'];
  $entry = date('Y-m-d');
  $card = "1230419";
  $status = $_POST['status'];

  $sql = mysqli_query($con, "SELECT memberTransID FROM tblmembertransaction ORDER BY memberTransID DESC LIMIT 1;");

  $num = mysqli_num_rows($sql);

  if( $num > 0){
    while ($row = mysqli_fetch_array($sql)) {
      $id = (int) $row['memberTransID'];
    }
    $id++;
  }else{
    $id = 1;
  }

  mysqli_query($con, "INSERT INTO tblmembertransaction VALUES('$id','$name','$bday','$age','$height','$weight','$gender','$civil','$address','$telephone',
               '$mobile','$email','$occupation','$specs','$limit','$annual','$freqVal','$amountToPay','$mode','$balance','$entry','$end',
               '$reason','$terminator','$date','$card','$status')");


  mysqli_query($con, "INSERT INTO tblmemberplan (intMemberID,intPlanID) VALUES('$id','$plan')");
  mysqli_query($con, "INSERT INTO tblmembertype (intMemberID,intMembershipID) VALUES('$id','$membership')");

if(!empty($_POST['memberPEC'])){

  $pec = $_POST['memberPEC'];
  foreach ($pec as $p) {

    mysqli_query($con, "INSERT INTO tblmemberpec (intMemberID,intPECMemberID) VALUES('$id','$p')");
  }
}

if(!empty($_POST['dependentName']) && !empty($_POST['dependentBday']) && !empty($_POST['dependentCivilStatus']) && !empty($_POST['dependentCivilStatus'])){
  $names = count($_POST["dependentName"]);
  $bdays= count($_POST["dependentBday"]);
  $relations = count($_POST["dependentRelationship"]);
  $civils = count($_POST["dependentCivilStatus"]);

  if($names >= 1 && $bdays >= 1 && $relations >=1 && $civils >= 1){
    for ($n=0, $b=0, $r=0, $c=0; $n < $names, $b < $bdays, $r < $relations, $c < $civils; $n++, $b++, $r++, $c++) {
      if (trim($_POST["dependentName"][$n]) != '' && trim($_POST["dependentBday"][$b]) != '' && trim($_POST["dependentRelationship"][$r]) != '' && trim($_POST["dependentCivilStatus"][$c]) != '') {
        $insert = "INSERT INTO tbldependents(dependentName,dependentBday,dependentRelationship,dependentCivilStatus) VALUES('".mysqli_escape_string($con, $_POST["dependentName"][$n])."','".mysqli_escape_string($con, $_POST["dependentBday"][$b])."','".mysqli_escape_string($con, $_POST["dependentRelationship"][$r])."','".mysqli_escape_string($con, $_POST["dependentCivilStatus"][$c])."')";
        mysqli_query($con, $insert);

        $sql2 = mysqli_query($con, "SELECT dependentID FROM tbldependents ORDER BY dependentID DESC LIMIT 1;");

        $arrayDependentID = array();
        while ($r = mysqli_fetch_array($sql2)) {
          $arrayDependentID[] = $r['dependentID'];
        }

        foreach ($arrayDependentID as $did) {
          mysqli_query($con, "INSERT INTO tblmemberdependents(intMemberID, intDependentID) VALUES('$id', '$did')");
        }
      }
    }
  }
}

}

?>
