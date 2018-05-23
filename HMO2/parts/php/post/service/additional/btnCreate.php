<?php

require 'parts/php/connection.php';

  $name = $_POST['additionalName'];
  $coverage = $_POST['coverageArray'];
  $status = $_POST['status'];

  $check = mysqli_query($con, "SELECT COUNT(*) FROM tbladditional WHERE additionalName = '$name'
           AND status = 'Active'");
  $r = mysqli_fetch_row($check);

  if($r[0] == 0){


  $sql = mysqli_query($con, "SELECT additionalID FROM tbladditional ORDER BY additionalID DESC LIMIT 1;");

  $num = mysqli_num_rows($sql);

  if( $num > 0){
    while ($row = mysqli_fetch_array($sql)) {
      $id = (int) $row['additionalID'];
    }
    $id++;
  }else{
    $id = 1;
  }

  mysqli_query($con, "INSERT INTO tbladditional VALUES('$id','$name','$status')");

    foreach ($coverage as $cvg) {
      mysqli_query($con, "INSERT INTO tbladditionalcoverage (intAdditionalID,intcoverageid) VALUES('$id','$cvg')");
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
  alertify.alert("The Additional Service is already Existing ! Please Try Again");
  $("#newAdditional").modal({"backdrop":"static"});
 </script>
 <?php
}


?>
