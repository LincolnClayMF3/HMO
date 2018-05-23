<?php

require 'parts/php/connection.php';

  $id = $_POST['id'];
  $status = "Inactive";

  mysqli_query($con,"UPDATE tblstandard SET status = '$status' WHERE standardID = '$id'");

  ?>
  <script>
  alertify.alert("Deleted Successfully !");
  setTimeout(function(){
  window.location = 'maintenance-standard.php';
}, 1500);
  </script>
  <?php
?>
