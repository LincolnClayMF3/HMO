<?php

require 'parts/php/connection.php';

  $id = $_POST['id'];
  $status = "Inactive";

  mysqli_query($con,"UPDATE tblcoverage SET status = '$status' WHERE coverageID = '$id'");
  ?>
  <script>
  alertify.alert("Deleted Successfully !");
  setTimeout(function(){
  window.location = 'maintenance-coverage.php';
}, 1500);
  </script>
<?php

?>
