<?php

require 'parts/php/connection.php';

$name = $_POST['requirementName'];
$type = $_POST['requirementType'];
$desc = $_POST['requirementDesc'];
$status = $_POST['status'];

$check = mysqli_query($con, "SELECT COUNT(*) FROM tblrequirement WHERE requirementName = '$name' AND requirementType = '$type'");
$r = mysqli_fetch_row($check);

if($r[0] == 0){
$sql = mysqli_query($con, "SELECT requirementID FROM tblrequirement ORDER BY requirementID DESC LIMIT 1;");

$num = mysqli_num_rows($sql);

if( $num > 0){
  while ($row = mysqli_fetch_array($sql)) {
    $id = (int) $row['requirementID'];
  }
  $id++;
}else{
  $id = 1;
}

mysqli_query($con, "INSERT INTO tblrequirement VALUES('$id','$name','$type','$desc','$status')");

?>
<script>
alertify.alert("Created Successfully !");
</script>
<?php
}

else {
?>
<script>
alertify.alert("The Requirement is already Existing ! Please Try Again");
$("#newRequirement").modal({"backdrop":"static"});
</script>
<?php
}

?>
