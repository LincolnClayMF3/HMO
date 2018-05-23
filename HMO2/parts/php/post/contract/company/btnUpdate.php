<?php

if(!empty($_POST['notify'])){
$id = $_POST['id'];
$name = $_POST['companyName'];
$address = $_POST['companyAddress'];
$plan = $_POST['planArray'];
$telephone = $_POST['companyTelephone'];
$mobile = $_POST['companyMobile'];
$email = $_POST['companyEmail'];
$end = $_POST['contract'];
$notify = $_POST['notify'];
$status = $_POST['status'];


mysqli_query($con,"UPDATE tblcompanymaintenance
  SET companyEndContract = '$end', companyMainName = '$name', companyMainAddress = '$address',
      companyNotify = '$notify', companyMainTelephone = '$telephone',
      companyMainMobile = '$mobile', companyMainEmail = '$email', status = '$status' WHERE companyMainID = '$id'");

mysqli_query($con,"DELETE FROM tblcompanyplan WHERE intCompanyID = '$id'");

foreach ($plan as $p) {
  mysqli_query($con, "INSERT INTO tblcompanyplan (intCompanyID,intPlanID) VALUES('$id','$p')");
}

            ?>
                  <script>
                  alertify.alert("Updated Successfully !");
                  setTimeout(function(){
                  window.location = 'transaction-contract-company.php';
                }, 1500);
                  </script>
              <?php
    }
    else {
      $id = $_POST['id'];
      $name = $_POST['companyName'];
      $address = $_POST['companyAddress'];
      $plan = $_POST['planArray'];
      $telephone = $_POST['companyTelephone'];
      $mobile = $_POST['companyMobile'];
      $email = $_POST['companyEmail'];
      $end = $_POST['contract'];
      $status = $_POST['status'];

      mysqli_query($con,"UPDATE tblcompanymaintenance
        SET companyEndContract = '$end', companyMainName = '$name', companyMainAddress = '$address',
            companyMainTelephone = '$telephone',
            companyMainMobile = '$mobile', companyMainEmail = '$email', status = '$status' WHERE companyMainID = '$id'");

      mysqli_query($con,"DELETE FROM tblcompanyplan WHERE intCompanyID = '$id'");

      foreach ($plan as $p) {
        mysqli_query($con, "INSERT INTO tblcompanyplan (intCompanyID,intPlanID) VALUES('$id','$p')");
      }

            // echo "<meta http-equiv='refresh' content='0'>";
            ?>
            <script>
            alertify.alert("Updated Successfully !");
            setTimeout(function(){
            window.location = 'transaction-contract-company.php';
          }, 3000);
            </script>
        <?php
    }

?>
