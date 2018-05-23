<?php

      $id = $_POST['id'];
      $status = "Inactive";

      mysqli_query($con,"UPDATE tbladditional SET status = '$status' WHERE additionalID = '$id'");

      ?>
      <script>
      alertify.alert("Deleted Successfully !");
      setTimeout(function(){
      window.location = 'maintenance-additional.php';
    }, 1500);
      </script>
      <?php

?>
