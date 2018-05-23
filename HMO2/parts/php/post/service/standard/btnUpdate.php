<?php

require 'parts/php/connection.php';

$name = $_POST['standardName'];
$coverage = $_POST['coverageArray'];
// list($cvg,$name) = explode('|', $_POST['coverageArray']);

$id = $_POST['id'];
$status = $_POST['status'];


// $check = mysqli_query($con, "SELECT COUNT(*) FROM tblstandard WHERE standardName = '$name'");
// $r = mysqli_fetch_row($check);

// if($r[0] == 0){
mysqli_query($con,"UPDATE tblstandard SET standardName = '$name', status = '$status' WHERE standardID = '$id'");
mysqli_query($con, "DELETE FROM tblstandardcoverage WHERE intStandardID = '$id'");

foreach ($coverage as $cvg) {
  mysqli_query($con, "INSERT INTO tblstandardcoverage (intStandardID, intCoverageID) VALUES ('$id','$cvg')");
}

// echo "<meta http-equiv='refresh' content='0'>";
?>
<script>
alertify.alert("Edited Successfully !");
setTimeout(function(){
window.location = 'maintenance-standard.php';
}, 5000);
</script>
<?php
// }

// else {
?>
<!-- <script>
alertify.alert("No Changes were made");
</script> -->
<?php
// }
?>
