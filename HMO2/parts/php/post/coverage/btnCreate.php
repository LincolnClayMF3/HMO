<?php

require 'parts/php/connection.php';

  $category = $_POST['category'];
  $name = $_POST['coverageName'];
  $status = $_POST['status'];
  if(!empty($_POST['coverageDesc'])){
    $desc = $_POST['coverageDesc'];
  }


  $check = mysqli_query($con, "SELECT COUNT(*) FROM tblcoverage WHERE coverageName = '$name'
           AND coverageDesc = '$desc' AND status = 'Active'");
  $r = mysqli_fetch_row($check);

  if($r[0] == 0){

  $sql = mysqli_query($con, "SELECT coverageID FROM tblcoverage ORDER BY coverageID DESC LIMIT 1;");
  $num = mysqli_num_rows($sql);

  if( $num > 0){
    while ($row = mysqli_fetch_array($sql)) {
      $id = (int) $row['coverageID'];
    }
    $id++;
  }else{
    $id = 1;
  }

  mysqli_query($con, "INSERT INTO tblCoverage VALUES('$id','$name','$desc','$status')");
  mysqli_query($con, "INSERT INTO tblCoverageCategory VALUES('','$category','$id')");
  ?>
  <script>
  alertify.alert("Created Successfully !");
  </script>
<?php
}

else {
?>
<script>
alertify.alert("The Coverage is already Existing ! Please Try Again");
$("#newCoverage").modal({"backdrop":"static"});
</script>
<?php
}


?>
