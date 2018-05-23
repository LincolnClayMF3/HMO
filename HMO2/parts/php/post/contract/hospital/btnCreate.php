<?php

$name = $_POST['hospitalName'];
$address = $_POST['hospitalAddress'];
$coordinator = $_POST['hospitalCoordinator'];
$coordinator_explode = explode("|",$coordinator);
$coordinatorVal = $coordinator_explode[1];
$region = $_POST['hospitalRegion'];
$type = $_POST['hospitalSpecification'];
$telephone = $_POST['hospitalTelephone'];
$mobile = $_POST['hospitalMobile'];
$email = $_POST['hospitalEmail'];
$entry = date('Y-m-d');
$end = $_POST['contract'];
$status = $_POST['status'];
$reason = "None";
$terminator = "None";
$date = "0000-00-00";


$sql = mysqli_query($con, "SELECT hospitalMainID FROM tblhospitalmaintenance ORDER BY hospitalMainID DESC LIMIT 1;");

$num = mysqli_num_rows($sql);

if( $num > 0){
  while ($row = mysqli_fetch_array($sql)) {
    $id = (int) $row['hospitalMainID'];
  }
  $id++;
}else{
  $id = 1;
}

$check = mysqli_query($con, "SELECT COUNT(*) FROM tblhospitalmaintenance WHERE hospitalMainName = '$name'");
$r = mysqli_fetch_row($check);

if($r[0] == 0){
mysqli_query($con, "INSERT INTO tblhospitalmaintenance
                    VALUES('$id','$name','$region','$address','$coordinatorVal','$type','$telephone',
                           '$mobile','$email','$entry','$end','','$reason','$terminator','$date','$status')");
                    ?>
                     <script>
                    alertify.alert("Created Successfully !");
                    </script>
                    <?php
                    }

                    else {
                    ?>
                    <script>
                    alertify.alert("The Hospital is already Existing ! Please Try Again");
                    $("#newHospital").modal({"backdrop":"static"});
                    </script>
                    <?php
                    }
                    ?>
