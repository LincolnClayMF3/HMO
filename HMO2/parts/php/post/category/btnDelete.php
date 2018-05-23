<?php

require 'parts/php/connection.php';

if(isset($_POST['btnDelete'])){
  $id = $_POST['id'];
  $status = "Inactive";

  mysqli_query($con,"UPDATE tblcategory SET status = '$status' WHERE categoryID = '$id'");

  ?>
  <script>
  alertify.alert("Deleted Successfully !");
  setTimeout(function(){
  window.location = 'maintenance-category.php';
}, 1500);
  </script>
<?php

}

?>
