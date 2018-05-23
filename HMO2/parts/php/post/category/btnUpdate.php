<?php

require 'parts/php/connection.php';

  $id = $_POST['id'];
  $type = $_POST['categoryType'];
  $desc = $_POST['categoryDesc'];
  $class = $_POST['class'];
  $specs = $_POST['specs'];
  $status = $_POST['status'];

  $check = mysqli_query($con, "SELECT COUNT(*) FROM tblcategory WHERE categoryType = '$type'
           AND categoryDesc = '$desc' AND classification = '$class' AND specification = '$specs' AND status = 'Active'");
  $r = mysqli_fetch_row($check);

  if($r[0] == 0){

  mysqli_query($con,"UPDATE tblcategory SET categoryType = '$type', categoryDesc = '$desc',
                     classification = '$class', specification = '$specs', status = '$status' WHERE categoryID = '$id'");


            ?>
            <script>
            alertify.alert("Edited Successfully !");
            setTimeout(function(){
            window.location = 'maintenance-category.php';
          }, 3000);
            </script>
        <?php
}

else {
?>
<script>
alertify.alert("No Changes were made");
</script>
<?php
}
?>
