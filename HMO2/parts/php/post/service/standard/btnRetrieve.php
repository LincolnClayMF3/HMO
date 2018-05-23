<?php

require 'parts/php/connection.php';

  $id = $_POST['id'];
  $status = "Active";

  mysqli_query($con,"UPDATE tblstandard SET status = '$status' WHERE standardID = '$id'");

  ?>
  <script>
  alertify.alert("Retrieved Successfully !");
  </script>
<?php

?>
