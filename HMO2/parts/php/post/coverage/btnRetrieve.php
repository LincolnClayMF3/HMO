<?php

require 'parts/php/connection.php';

  $id = $_POST['id'];
  $status = "Active";

  mysqli_query($con,"UPDATE tblcoverage SET status = '$status' WHERE coverageID = '$id'");

  ?>
  <script>
  alertify.alert("Retrieved Successfully !");
  </script>
<?php


?>
