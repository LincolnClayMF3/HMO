<?php

require 'parts/php/connection.php';

  $id = $_POST['id'];
  $name = $_POST['btnUpdate'];

  $check = mysqli_query($con, "SELECT COUNT(*) FROM tblskins WHERE utilitiesskin = '$name' ");
  $r = mysqli_fetch_row($check);

  if($r[0] == 0){

  mysqli_query($con,"UPDATE tblskins SET utilitiesskin = '$name' WHERE utilitiesID = '$id'");


            ?>
            <script>
            alertify.alert('Edited Successfully!');
            setTimeout(function(){
            window.location = 'utilities-skins.php';
          }, 1000);
            </script>
        <?php
}

else {
?>
<script>
alertify.alert('No Changes Made.');
</script>
<?php
}
?>
