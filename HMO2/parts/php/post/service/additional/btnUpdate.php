<?php

$name = $_POST['additionalName'];
$coverage = $_POST['coverageArray'];
$id = $_POST['id'];
$status = $_POST['status'];


// $check = mysqli_query($con, "SELECT COUNT(*) FROM tbladditional WHERE additionalName = '$name'");
// $r = mysqli_fetch_row($check);

// if($r[0] == 0){
mysqli_query($con,"UPDATE tbladditional SET additionalName = '$name', status = '$status' WHERE additionalID = '$id'");

mysqli_query($con, "DELETE FROM tbladditionalcoverage WHERE intAdditionalID = '$id'");

foreach ($coverage as $cvg) {
  mysqli_query($con, "INSERT INTO tbladditionalcoverage (intAdditionalID, intCoverageID) VALUES ('$id','$cvg')");
}

// echo "<meta http-equiv='refresh' content='0'>";

?>
<script>
alertify.alert("Edited Successfully !");
setTimeout(function(){
window.location = 'maintenance-additional.php';
}, 3000);
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
