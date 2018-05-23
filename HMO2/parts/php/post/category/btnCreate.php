<?php
  require 'parts/php/connection.php';

  $type = $_POST['categoryType'];
  $desc = $_POST['categoryDesc'];
  $class = $_POST['class'];
  $specs = $_POST['specs'];
  $status = $_POST['status'];


  $check = mysqli_query($con, "SELECT COUNT(*) FROM tblcategory WHERE categoryType = '$type'
           AND categoryDesc = '$desc' AND classification = '$class' AND specification = '$specs' AND status = 'Active'");
  $r = mysqli_fetch_row($check);

  if($r[0] == 0){
  mysqli_query($con, "INSERT INTO tblcategory VALUES('','$type','$desc','$class','$specs','$status')");


  ?>
   <script>
  alertify.alert("Created Successfully !");
  </script>
<?php
}

else {
?>
<script>
alertify.alert("The Coverage Category is already Existing ! Please Try Again");
$("#newCategory").modal({"backdrop":"static"});
</script>
<?php
}
?>
