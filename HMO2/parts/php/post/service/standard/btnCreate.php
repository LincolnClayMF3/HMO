<?php

require 'parts/php/connection.php';

  $name = $_POST['standardName'];
  $coverage = $_POST['coverageArray'];
  $status = $_POST['status'];

  $check = mysqli_query($con, "SELECT COUNT(*) FROM tblstandard WHERE standardName = '$name'
           AND status = 'Active'");
  $r = mysqli_fetch_row($check);

  if($r[0] == 0){


  $sql = mysqli_query($con, "SELECT standardID FROM tblstandard ORDER BY standardID DESC LIMIT 1;");

  $num = mysqli_num_rows($sql);

  if( $num > 0){
    while ($row = mysqli_fetch_array($sql)) {
      $id = (int) $row['standardID'];
    }
    $id++;
  }else{
    $id = 1;
  }

  mysqli_query($con, "INSERT INTO tblstandard VALUES('$id','$name','$status')");

    foreach ($coverage as $cvg) {
      mysqli_query($con, "INSERT INTO tblstandardcoverage (intStandardID,intCoverageID) VALUES('$id','$cvg')");
    }

    ?>
    <script>
    alertify.alert("Created Successfully !");
    </script>
<?php
}

else {
 ?>
 <script>
  alertify.alert("The Standard Service is already Existing ! Please Try Again");
  $("#newStandard").modal({"backdrop":"static"});
 </script>
 <?php
}

?>
