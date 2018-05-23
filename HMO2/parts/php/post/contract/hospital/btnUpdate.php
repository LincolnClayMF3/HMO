<?php

if(!empty($_POST['notify'])){
$id = $_POST['id'];
$name = $_POST['hospitalName'];
$address = $_POST['hospitalAddress'];
$region = $_POST['hospitalRegion'];
$coordinator = $_POST['hospitalCoordinator'];
$telephone = $_POST['hospitalTelephone'];
$mobile = $_POST['hospitalMobile'];
$email = $_POST['hospitalEmail'];
$type = $_POST['major'];
$end = $_POST['contract'];
$status = $_POST['status'];
$notify = $_POST['notify'];

mysqli_query($con,"UPDATE tblhospitalmaintenance
  SET hospitalNotify = '$notify', hospitalEndContract = '$end', hospitalMainName = '$name', hospitalRegion = '$region', hospitalMainAddress = '$address',
      hospitalMainCoordinator = '$coordinator', hospitalSpecification = '$type', hospitalMainTelephone = '$telephone',
      hospitalMainMobile = '$mobile', hospitalMainEmail = '$email', status = '$status' WHERE hospitalMainID = '$id'");

      echo "<meta http-equiv='refresh' content='0'>";
    }
    else {
      $id = $_POST['id'];
      $name = $_POST['hospitalName'];
      $address = $_POST['hospitalAddress'];
      $region = $_POST['hospitalRegion'];
      $coordinator = $_POST['hospitalCoordinator'];
      $type = $_POST['major'];
      $telephone = $_POST['hospitalTelephone'];
      $mobile = $_POST['hospitalMobile'];
      $email = $_POST['hospitalEmail'];
      $end = $_POST['contract'];
      $status = $_POST['status'];

      mysqli_query($con,"UPDATE tblhospitalmaintenance
        SET hospitalEndContract = '$end', hospitalMainName = '$name', hospitalRegion = '$region', hospitalMainAddress = '$address',
            hospitalMainCoordinator = '$coordinator', hospitalSpecification = '$type', hospitalMainTelephone = '$telephone',
            hospitalMainMobile = '$mobile', hospitalMainEmail = '$email', status = '$status' WHERE hospitalMainID = '$id'");

            // echo "<meta http-equiv='refresh' content='0'>";

            ?>
                  <script>
                  alertify.alert("Updated Successfully !");
                  setTimeout(function(){
                  window.location = 'transaction-contract-hospital.php';
                }, 3000);
                  </script>
              <?php
    }

?>
