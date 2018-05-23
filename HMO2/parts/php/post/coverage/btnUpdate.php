<?php

require 'parts/php/connection.php';

  $id = $_POST['id'];
  $name = $_POST['coverageName'];
  $category = $_POST['category'];
  $status = $_POST['status'];
  if(!empty($_POST['coverageDesc'])){
    $desc = $_POST['coverageDesc'];
  }

  $check = mysqli_query($con, "SELECT COUNT(*) FROM tblcoverage WHERE coverageName = '$name'
           AND coverageDesc = '$desc' AND status = 'Active'");
  $r = mysqli_fetch_row($check);

  if($r[0] == 0){
  mysqli_query($con,"UPDATE tblcoverage SET coverageName = '$name', coverageDesc = '$desc', status = '$status' WHERE coverageID = '$id'");

  mysqli_query($con,"DELETE FROM tblCoverageCategory WHERE intCoverageID = '$id'");

  mysqli_query($con, "INSERT INTO tblCoverageCategory VALUES('','$category','$id')");

  // echo "<meta http-equiv='refresh' content='0'>";
  ?>
  <script>
  alertify.alert("Edited Successfully !");
  setTimeout(function(){
  window.location = 'maintenance-coverage.php';
}, 3000);
  </script>
<?php
}
else {
?>
<script>
alertify.alert("No Changes were made");
</script>
<?php
}
?>
