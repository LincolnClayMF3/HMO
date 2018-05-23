<?php

require 'parts/php/connection.php';

if(isset($_POST['btnRetrieve'])){
  $id = $_POST['id'];
  $status = "Active";

  mysqli_query($con,"UPDATE tblcategory SET status = '$status' WHERE categoryID = '$id'");

  ?>
   <script>
  alertify.alert("Retrieved Successfully !");
  </script>
<?php
}

?>
